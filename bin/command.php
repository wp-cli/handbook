<?php

namespace WP_CLI\Handbook;

use WP_CLI;
use Mustache_Engine;

/**
 * WP-CLI commands to generate docs from the codebase.
 */

define( 'WP_CLI_HANDBOOK_PATH', dirname( dirname( __FILE__ ) ) );


/**
 * @when before_wp_load
 */
class Command {

	/**
	 * Regenerate all doc pages
	 *
	 * @subcommand gen-all
	 */
	public function gen_all() {
		self::gen_api_docs();
		self::gen_commands();
		self::gen_commands_manifest();
		self::gen_hb_manifest();
		WP_CLI::success( 'Generated all doc pages.' );
	}

	/**
	 * Generate internal API doc pages
	 *
	 * @subcommand gen-api-docs
	 */
	public function gen_api_docs() {
		$apis = self::invoke_wp_cli( 'wp handbook api-dump' );
		$categories = array(
			'Registration' => array(),
			'Output' => array(),
			'Input'  => array(),
			'Execution' => array(),
			'System' => array(),
			'Misc'   => array(),
		);

		$prepare_api_slug = function( $full_name ) {
			$replacements = array(
				'()'      => '',
				'::'      => '-',
				'_'       => '-',
				'\\'      => '-',
			);
			return strtolower( str_replace( array_keys( $replacements ), array_values( $replacements ), $full_name ) );
		};

		foreach( $apis as $api ) {

			$api['api_slug'] = $prepare_api_slug( $api['full_name'] );

			if ( ! empty( $api['phpdoc']['parameters']['category'][0][0] )
				&& isset( $categories[ $api['phpdoc']['parameters']['category'][0][0] ] ) ) {
				$categories[ $api['phpdoc']['parameters']['category'][0][0] ][] = $api;
			} else {
				$categories['Misc'][] = $api;
			}
		}
		$out = <<<EOT
# Internal API

WP-CLI includes a number of utilities which are considered stable and meant to be used by commands.

This also means functions and methods not listed here are considered part of the private API. They may change or disappear at any time.

*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*

***

EOT;

		foreach( $categories as $name => $apis ) {
			$out .= '## ' . $name . PHP_EOL . PHP_EOL;
			$out .= self::render( 'internal-api-list.mustache', array( 'apis' => $apis ) );
			foreach( $apis as $i => $api ) {
				$api['category'] = $name;
				$api['related'] = $apis;
				$api['phpdoc']['parameters'] = array_map( function( $parameter ){
					foreach( $parameter as $key => $values ) {
						if ( isset( $values[2] ) ) {
							$values[2] = str_replace( array( PHP_EOL ), array( '<br />' ), $values[2] );
							$parameter[ $key ] = $values;
						}
					}
					return $parameter;
				}, $api['phpdoc']['parameters'] );
				unset( $api['related'][ $i ] );
				$api['related'] = array_values( $api['related'] );
				$api['has_related'] = ! empty( $api['related'] );
				$api_doc = self::render( 'internal-api.mustache', $api );
				$path = WP_CLI_HANDBOOK_PATH . "/internal-api/{$api['api_slug']}.md";
				if ( ! is_dir( dirname( $path ) ) ) {
					mkdir( dirname( $path ) );
				}
				file_put_contents( $path, $api_doc );
			}
			$out .= PHP_EOL . PHP_EOL;
		}

		file_put_contents( WP_CLI_HANDBOOK_PATH . '/internal-api.md', $out );
		WP_CLI::success( 'Generated /docs/internal-api/' );
	}

	/**
	 * Generate command pages
	 *
	 * @subcommand gen-commands
	 */
	public function gen_commands() {
		$wp = self::invoke_wp_cli( 'wp --skip-packages cli cmd-dump' );

		$bundled_cmds = array();
		foreach( $wp['subcommands'] as $k => $cmd ) {
			if ( in_array( $cmd['name'], array( 'website', 'api-dump', 'handbook' ) ) ) {
				unset( $wp['subcommands'][ $k ] );
				continue;
			}
			$bundled_cmds[] = $cmd['name'];
		}
		$wp['subcommands'] = array_values( $wp['subcommands'] );

		foreach ( $wp['subcommands'] as $cmd ) {
			self::gen_cmd_pages( $cmd );
		}

		$package_dir = dirname( __DIR__ ) . '/bin/packages';
		foreach ( array(
			'wp-cli/admin-command',
			'wp-cli/find-command',
			'wp-cli/profile-command',
			'wp-cli/dist-archive-command'
		) as $package ) {
			WP_CLI::log( 'Installing ' . $package );
			self::invoke_wp_cli( 'WP_CLI_PACKAGES_DIR=' . $package_dir . ' wp package install ' . $package );
		}
		$wp_with_packages = self::invoke_wp_cli( 'WP_CLI_PACKAGES_DIR=' . $package_dir . ' wp cli cmd-dump' );

		foreach( $wp_with_packages['subcommands'] as $k => $cmd ) {
			if ( in_array( $cmd['name'], array( 'website', 'api-dump', 'handbook' ) )
				|| in_array( $cmd['name'], $bundled_cmds ) ) {
				unset( $wp_with_packages['subcommands'][ $k ] );
			}
		}
		$wp_with_packages['subcommands'] = array_values( $wp_with_packages['subcommands'] );

		foreach ( $wp_with_packages['subcommands'] as $cmd ) {
			self::gen_cmd_pages( $cmd );
		}

		WP_CLI::success( 'Generated all command pages.' );
	}

	/**
	 * Update the commands data array with new data
	 */
	private static function update_commands_data( $command, &$commands_data, $parent ) {
		$full = trim( $parent . ' ' . $command->get_name() );
		$reflection = new \ReflectionClass( $command );
		$repo_url = '';
		if ( 'help' === substr( $full, 0, 4 )
			|| 'cli' === substr( $full, 0, 3 ) ) {
			$repo_url = 'https://github.com/wp-cli/wp-cli';
		}
		if ( $reflection->hasProperty( 'when_invoked' ) ) {
			$when_invoked = $reflection->getProperty( 'when_invoked' );
			$when_invoked->setAccessible( true );
			$closure = $when_invoked->getValue( $command );
			$closure_reflection = new \ReflectionFunction( $closure );
			$static = $closure_reflection->getStaticVariables();
			if ( isset( $static['callable'][0] ) ) {
				$reflection_class = new \ReflectionClass( $static['callable'][0] );
				$filename = $reflection_class->getFileName();
				preg_match( '#vendor/([^/]+/[^/]+)#', $filename, $matches );
				if ( ! empty( $matches[1] ) ) {
					$repo_url = 'https://github.com/' . $matches[1];
				}
			} else {
				WP_CLI::error( 'No callable for: ' . var_export( $static, true ) );
			}
		}
		$commands_data[ $full ] = array(
			'repo_url' => $repo_url,
		);
		$len = count( $commands_data );
		foreach ( $command->get_subcommands() as $subcommand ) {
			$sub_full = trim( $full . ' ' . $subcommand->get_name() );
			self::update_commands_data( $subcommand, $commands_data, $full );
		}
		if ( isset( $sub_full ) && ! $commands_data[ $full ]['repo_url'] && ! empty( $commands_data[ $sub_full ]['repo_url'] ) ) {
			$commands_data[ $full ]['repo_url'] = $commands_data[ $sub_full ]['repo_url'];
		}
	}

	/**
	 * Generate a manifest document of all command pages
	 *
	 * @subcommand gen-commands-manifest
	 */
	public function gen_commands_manifest() {
		$manifest = array();
		$paths = array(
			WP_CLI_HANDBOOK_PATH . '/commands/*.md',
			WP_CLI_HANDBOOK_PATH . '/commands/*/*.md',
			WP_CLI_HANDBOOK_PATH . '/commands/*/*/*.md'
		);
		$commands_data = array();
		foreach( WP_CLI::get_root_command()->get_subcommands() as $command ) {
			self::update_commands_data( $command, $commands_data, '' );
		}
		foreach( $paths as $path ) {
			foreach( glob( $path ) as $file ) {
				$slug = basename( $file, '.md' );
				$cmd_path = str_replace( array( WP_CLI_HANDBOOK_PATH . '/commands/', '.md' ), '', $file );
				$title = '';
				$contents = file_get_contents( $file );
				if ( preg_match( '/^#\swp\s(.+)/', $contents, $matches ) ) {
					$title = $matches[1];
				}
				$parent = null;
				if ( stripos( $cmd_path, '/' ) ) {
					$bits = explode( '/', $cmd_path );
					array_pop( $bits );
					$parent = implode( '/', $bits );
				}
				$manifest[ $cmd_path ] = array(
					'title'           => $title,
					'slug'            => $slug,
					'cmd_path'        => $cmd_path,
					'parent'          => $parent,
					'markdown_source' => sprintf( 'https://github.com/wp-cli/handbook/blob/master/commands/%s.md', $cmd_path ),
				);
				if ( ! empty( $commands_data[ $title ] ) ) {
					$manifest[ $cmd_path ] = array_merge( $manifest[ $cmd_path ], $commands_data[ $title ] );
				}
			}
		}
		file_put_contents( WP_CLI_HANDBOOK_PATH . '/bin/commands-manifest.json', json_encode( $manifest, JSON_PRETTY_PRINT ) );
		$count = count( $manifest );
		WP_CLI::success( "Generated commands-manifest.json of {$count} commands" );
	}

	/**
	 * Generate a manifest document of all handbook pages
	 *
	 * @subcommand gen-hb-manifest
	 */
	public function gen_hb_manifest() {
		$manifest = array();
		// Top-level pages
		foreach( glob( WP_CLI_HANDBOOK_PATH . '/*.md' ) as $file ) {
			$slug = basename( $file, '.md' );
			if ( 'README' === $slug ) {
				continue;
			}
			$title = '';
			$contents = file_get_contents( $file );
			if ( preg_match( '/^#\s(.+)/', $contents, $matches ) ) {
				$title = $matches[1];
			}
			$manifest[ $slug ] = array(
				'title'           => $title,
				'slug'            => 'index' === $slug ? 'handbook' : $slug,
				'markdown_source' => sprintf( 'https://github.com/wp-cli/handbook/blob/master/%s.md', $slug ),
				'parent'          => null,
			);
		}
		// Internal API pages
		foreach( glob( WP_CLI_HANDBOOK_PATH . '/internal-api/*.md' ) as $file ) {
			$slug = basename( $file, '.md' );
			$title = '';
			$contents = file_get_contents( $file );
			if ( preg_match( '/^#\s(.+)/', $contents, $matches ) ) {
				$title = $matches[1];
			}
			$manifest[ $slug ] = array(
				'title'           => $title,
				'slug'            => $slug,
				'markdown_source' => sprintf( 'https://github.com/wp-cli/handbook/blob/master/internal-api/%s.md', $slug ),
				'parent'          => 'internal-api',
			);
		}
		file_put_contents( WP_CLI_HANDBOOK_PATH . '/bin/handbook-manifest.json', json_encode( $manifest, JSON_PRETTY_PRINT ) );
		WP_CLI::success( 'Generated handbook-manifest.json' );
	}

	/**
	 * Dump internal API PHPDoc to JSON
	 *
	 * @subcommand api-dump
	 */
	public function api_dump() {
		$apis = array();
		require WP_CLI_ROOT . '/php/utils-wp.php';
		$functions = get_defined_functions();
		foreach( $functions['user'] as $function ) {
			$reflection = new \ReflectionFunction( $function );
			$phpdoc = $reflection->getDocComment();
			if ( false === stripos( $phpdoc, '@access public' ) ) {
				continue;
			}
			$apis[] = self::get_simple_representation( $reflection );
		}
		$classes = get_declared_classes();
		foreach( $classes as $class ) {
			if ( false === stripos( $class, 'WP_CLI' ) ) {
				continue;
			}
			$reflection = new \ReflectionClass( $class );
			foreach( $reflection->getMethods() as $method ) {
				$method_reflection = new \ReflectionMethod( $method->class, $method->name );
				$phpdoc = $method_reflection->getDocComment();
				if ( false === stripos( $phpdoc, '@access public' ) ) {
					continue;
				}
				$apis[] = self::get_simple_representation( $method_reflection );
			}
		}
		echo json_encode( $apis );
	}

	private static function gen_cmd_pages( $cmd, $parent = array() ) {
		$parent[] = $cmd['name'];

		static $params;
		if ( ! isset( $params ) ) {
			$params = self::invoke_wp_cli( 'wp --skip-packages cli param-dump' );
			// Preserve positioning of 'url' param
			$url_param = $params['url'];
			unset( $params['url'] );
			$new_params = array();
			foreach( $params as $param => $meta ) {
				$new_params[ $param ] = $meta;
				if ( 'path' === $param ) {
					$new_params['url'] = $url_param;
				}
			}
			$params = $new_params;
		}

		$binding = $cmd;
		$binding['synopsis'] = implode( ' ', $parent );
		$binding['path'] = implode( '/', $parent );
		$path = '/commands/';
		$binding['breadcrumbs'] = '[Commands](' . $path . ')';
		foreach( $parent as $i => $p ) {
			$path .= $p . '/';
			if ( $i < ( count( $parent ) - 1 ) ) {
				$binding['breadcrumbs'] .= " &raquo; [{$p}]({$path})";
			} else {
				$binding['breadcrumbs'] .= " &raquo; {$p}";
			}
		}
		$binding['has-subcommands'] = isset( $cmd['subcommands'] ) ? array(true) : false;

		if ( $cmd['longdesc'] ) {
			$docs = $cmd['longdesc'];
			$docs = htmlspecialchars( $docs, ENT_COMPAT, 'UTF-8' );

			// decrease header level
			$docs = preg_replace( '/^## /m', '### ', $docs );

			// escape `--` so that it doesn't get converted into `&mdash;`
			$docs = preg_replace( '/^(\[?)--/m', '\1\--', $docs );
			$docs = preg_replace( '/^\s\s--/m', '  \1\--', $docs );

			// Remove wordwrapping from docs
			// Match words, '().,;', and --arg before/after the newline
			$bits = explode( "\n", $docs );
			$in_yaml_doc = $in_code_bloc = false;
			for ( $i=0; $i < count( $bits ); $i++ ) {
				if ( ! isset( $bits[ $i ] ) || ! isset( $bits[ $i + 1 ] ) ) {
					continue;
				}
				if ( '---' === $bits[ $i ] || '\---' === $bits[ $i ] ) {
					$in_yaml_doc = ! $in_yaml_doc;
				}
				if ( '```' === $bits[ $i ] ) {
					$in_code_bloc = ! $in_code_bloc;
				}
				if ( $in_yaml_doc || $in_code_bloc ) {
					continue;
				}

				if ( preg_match( '#([\w\(\)\.\,\;]|[`]{1})$#', $bits[ $i ] )
					&& preg_match( '#^([\w\(\)\.\,\;`]|\\\--[\w]|[`]{1})#', $bits[ $i + 1 ] ) ) {
					$bits[ $i ] .= ' ' . $bits[ $i + 1 ];
					unset( $bits[ $i + 1 ] );
					--$i;
					$bits = array_values( $bits );
				}
			}
			$docs = implode( "\n", $bits );

			// hack to prevent double encoding in code blocks
			$docs = preg_replace( '/ &lt; /', ' < ', $docs );
			$docs = preg_replace( '/ &gt; /', ' > ', $docs );
			$docs = preg_replace( '/ &lt;&lt;/', ' <<', $docs );
			$docs = preg_replace( '/&quot;/', '"', $docs );
			$docs = preg_replace( '/wp&gt; /', 'wp> ', $docs );
			$docs = preg_replace( '/=&gt;/', '=>', $docs );

			$global_parameters = <<<EOT
These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
EOT;
			foreach( $params as $param => $meta ) {
				if ( false === $meta['runtime']
					|| empty( $meta['desc'] )
					|| ! empty( $meta['deprecated'] ) ) {
					continue;
				}
				$param_arg = '--' . $param;
				if ( ! empty( $meta['runtime'] ) && true !== $meta['runtime'] ) {
					$param_arg .= $meta['runtime'];
				}
				if ( 'color' === $param ) {
					$param_arg = '--[no-]color';
				}
				$global_parameters .= PHP_EOL . '| `' . $param_arg . '` | ' . $meta['desc'] . ' |';
			}

			// Replace Global parameters with a nice table
			if ( $binding['has-subcommands'] ) {
				$replace_global = '';
			} else {
				$replace_global = '$1' . PHP_EOL . PHP_EOL . $global_parameters;
			}
			$docs = preg_replace( '/(#?## GLOBAL PARAMETERS).+/s', $replace_global, $docs );

			$binding['docs'] = $docs;
		}

		$path = dirname( __DIR__ ) . "/commands/" . $binding['path'];
		if ( !is_dir( dirname( $path ) ) ) {
			mkdir( dirname( $path ) );
		}
		file_put_contents( "$path.md", self::render( 'subcmd-list.mustache', $binding ) );
		WP_CLI::log( 'Generated /commands/' . $binding['path'] . '/' );

		if ( !isset( $cmd['subcommands'] ) )
			return;

		foreach ( $cmd['subcommands'] as $subcmd ) {
			self::gen_cmd_pages( $subcmd, $parent );
		}
	}

	/**
	 * Get a simple representation of a function or method
	 *
	 * @param Reflection
	 * @return array
	 */
	private static function get_simple_representation( $reflection ) {
		$signature = $reflection->getName();
		$parameters = array();
		foreach( $reflection->getParameters() as $parameter ) {
			$parameter_signature = '$' . $parameter->getName();
			if ( $parameter->isOptional() ) {
				$default_value = $parameter->getDefaultValue();
				if ( false === $default_value ) {
					$parameter_signature .= ' = false';
				} else if ( array() === $default_value ) {
					$parameter_signature .= ' = array()';
				} else if ( '' === $default_value ) {
					$parameter_signature .= " = ''";
				} else if ( null === $default_value ) {
					$parameter_signature .= ' = null';
				} else if ( true === $default_value ) {
					$parameter_signature .= ' = true';
				} else {
					$parameter_signature .= ' = ' . $default_value;
				}
			}
			$parameters[] = $parameter_signature;
		}
		if ( ! empty( $parameters ) ) {
			$signature = $signature . '( ' . implode( ', ', $parameters ) . ' )';
		} else {
			$signature = $signature . '()';
		}
		$phpdoc = $reflection->getDocComment();
		$type = strtolower( str_replace( 'Reflection', '', get_class( $reflection ) ) );
		$class = '';
		switch ( $type ) {
			case 'function':
				$full_name = $reflection->getName();
				break;
			case 'method':
				$separator = $reflection->isStatic() ? '::' : '->';
				$class = $reflection->class;
				$full_name = $class . $separator . $reflection->getName();
				$signature = $class . $separator . $signature;
				break;
		}
		return array(
			'phpdoc'       => self::parse_docblock( $phpdoc ),
			'type'         => $type,
			'signature'    => $signature,
			'short_name'   => $reflection->getShortName(),
			'full_name'    => $full_name,
			'class'        => $class,
		);
	}

	/**
	 * Parse PHPDoc into a structured representation
	 */
	private static function parse_docblock( $docblock ) {
		$ret = array(
			'description' => '',
			'parameters'  => array(),
		);
		$extra_line = '';
		$in_param = false;
		foreach( preg_split("/(\r?\n)/", $docblock ) as $line ){
			if ( preg_match('/^(?=\s+?\*[^\/])(.+)/', $line, $matches ) ) {
				$info = trim( $matches[1] );
				$info = preg_replace( '/^(\*\s+?)/', '', $info );
				if ( $in_param ) {
					list( $param, $key ) = $in_param;
					$ret['parameters'][ $param_name ][ $key ][2] .= PHP_EOL . $info;
					if ( '}' === substr( $info, -1 ) ) {
						$in_param = false;
					}
				} else if ( $info[0] !== "@" ) {
					$ret['description'] .= PHP_EOL . "{$extra_line}{$info}";
				} else {
					preg_match( '/@(\w+)/', $info, $matches );
					$param_name = $matches[1];
					$value = str_replace( "@$param_name ", '', $info );
					if ( ! isset( $ret['parameters'][ $param_name ] ) ) {
						$ret['parameters'][ $param_name ] = array();
					}
					$ret['parameters'][ $param_name ][] = preg_split( '/[\s]+/', $value, 3 );
					end( $ret['parameters'][ $param_name ] );
					$key = key( $ret['parameters'][ $param_name ] );
					reset( $ret['parameters'][ $param_name ] );
					if ( ! empty( $ret['parameters'][ $param_name ][ $key ][ 2 ] )
						&& '{' === substr( $ret['parameters'][ $param_name ][ $key ][ 2 ] , -1 ) ) {
						$in_param = array( $param_name, $key );
					}
				}
				$extra_line = '';
			} else {
				$extra_line .= PHP_EOL;
			}
		}
		$ret['description'] = str_replace( '\/', '/', trim( $ret['description'], PHP_EOL ) );
		$bits = explode( PHP_EOL, $ret['description'] );
		$ret['short_description'] = array_shift( $bits );
		$long_description = trim( implode( PHP_EOL, $bits ), PHP_EOL );
		$ret['long_description'] = $long_description;
		return $ret;
	}

	private static function invoke_wp_cli( $cmd ) {
		ob_start();
		system( "WP_CLI_CONFIG_PATH=/dev/null $cmd", $return_code );
		$json = ob_get_clean();

		if ( $return_code ) {
			echo "WP-CLI returned error code: $return_code\n";
			exit(1);
		}

		return json_decode( $json, true );
	}

	private static function render( $path, $binding ) {
		$m = new Mustache_Engine;
		$template = file_get_contents( WP_CLI_HANDBOOK_PATH . "/bin/templates/$path" );
		return $m->render( $template, $binding );
	}

}

WP_CLI::add_command( 'handbook', '\WP_CLI\Handbook\Command' );

