<?php
/**
 * WP-CLI commands to generate docs from the codebase.
 */

namespace WP_CLI\Handbook;

use Mustache_Engine;
use Reflection;
use WP_CLI;
use WP_CLI\Utils;


define( 'WP_CLI_HANDBOOK_PATH', dirname( __DIR__ ) );


/**
 * @when before_wp_load
 *
 * @phpstan-type Command_Array array{name:string, description:string, longdesc:string, subcommands?:array<Command_Array>, synopsis?:string, hook?:string}
 */
class Command {

	/**
	 * Regenerates all doc pages.
	 *
	 * ## OPTIONS
	 *
	 * [--verbose]
	 * : If set will list command pages as they are generated.
	 *
	 * @subcommand gen-all
	 */
	public function gen_all( $args, $assoc_args ) {
		// Warn if not invoked with null WP_CLI_CONFIG_PATH.
		if ( '/dev/null' !== getenv( 'WP_CLI_CONFIG_PATH' ) ) {
			WP_CLI::warning( "Should be invoked on the target WP-CLI with 'WP_CLI_CONFIG_PATH=/dev/null'." );
		}

		self::gen_api_docs();
		self::gen_behat_docs();
		self::gen_commands( $args, $assoc_args );
		self::gen_commands_manifest();
		self::gen_hb_manifest();
		WP_CLI::success( 'Generated all doc pages.' );
	}

	private function prepare_api_slug( $full_name ) {
		$replacements = [
			'\\w+' => '',
			'\\s'  => '',
			'\\d'  => '',
			'a-z'  => '',
			's?'   => '',
			'::'   => '-',
			'_'    => '-',
			'\\'   => '-',
			' '    => '-',
			'.'    => '-',
			'|'    => '-',
		];
		$full_name    = strtolower( str_replace( array_keys( $replacements ), array_values( $replacements ), $full_name ) );
		$full_name    = preg_replace( '/[^a-zA-Z0-9-]/', '', $full_name );
		$full_name    = preg_replace( '/-+/', '-', $full_name );
		$full_name    = trim( $full_name, '-' );
		return $full_name;
	}

	/**
	 * Generates internal API doc pages.
	 *
	 * @subcommand gen-api-docs
	 */
	public function gen_api_docs() {
		$apis = $this->get_internal_apis();

		$categories = [
			'Registration' => [],
			'Output'       => [],
			'Input'        => [],
			'Execution'    => [],
			'System'       => [],
			'Misc'         => [],
		];

		foreach ( $apis as $api ) {

			$api['api_slug'] = $this->prepare_api_slug( $api['full_name'] );

			if ( ! empty( $api['phpdoc']['parameters']['category'][0][0] )
				&& isset( $categories[ $api['phpdoc']['parameters']['category'][0][0] ] ) ) {
				$categories[ $api['phpdoc']['parameters']['category'][0][0] ][] = $api;
			} else {
				$categories['Misc'][] = $api;
			}
		}
		$out = <<<'EOT'
# Internal API

WP-CLI includes a number of utilities which are considered stable and meant to be used by commands.

This also means functions and methods not listed here are considered part of the private API. They may change or disappear at any time.

*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*

***

EOT;

		self::empty_dir( WP_CLI_HANDBOOK_PATH . '/internal-api/' );

		foreach ( $categories as $name => $apis ) {
			$out .= '## ' . $name . PHP_EOL . PHP_EOL;
			$out .= self::render( 'internal-api-list.mustache', [ 'apis' => $apis ] );
			foreach ( $apis as $i => $api ) {
				$api['category']             = $name;
				$api['related']              = $apis;
				$api['phpdoc']['parameters'] = array_map(
					function ( $parameter ) {
						foreach ( $parameter as $key => $values ) {
							if ( isset( $values[2] ) ) {
								$values[2]         = str_replace( array( PHP_EOL ), array( '<br />' ), $values[2] );
								$parameter[ $key ] = $values;
							}
						}
						return $parameter;
					},
					$api['phpdoc']['parameters']
				);
				unset( $api['related'][ $i ] );
				$api['related']     = array_values( $api['related'] );
				$api['has_related'] = ! empty( $api['related'] );

				$api_doc = self::render( 'internal-api.mustache', $api );
				$path    = WP_CLI_HANDBOOK_PATH . "/internal-api/{$api['api_slug']}.md";
				if ( ! is_dir( dirname( $path ) ) ) {
					mkdir( dirname( $path ) );
				}
				file_put_contents( $path, $api_doc );
			}
			$out .= PHP_EOL . PHP_EOL;
		}

		file_put_contents( WP_CLI_HANDBOOK_PATH . '/internal-api.md', $out );
		WP_CLI::success( 'Generated internal-api/' );
	}

	/**
	 * Generates Behat steps doc pages.
	 *
	 * @subcommand gen-behat-docs
	 */
	public function gen_behat_docs() {
		$apis = $this->get_behat_steps();

		$categories = [
			'Given' => [],
			'When'  => [],
			'Then'  => [],
		];

		foreach ( $apis as $api ) {

			$api['api_slug'] = $this->prepare_api_slug( $api['full_name'] );

			if ( isset( $api['phpdoc']['parameters']['Given'] ) ) {
				$categories['Given'][] = $api;
			} elseif ( isset( $api['phpdoc']['parameters']['When'] ) ) {
				$categories['When'][] = $api;
			} elseif ( isset( $api['phpdoc']['parameters']['Then'] ) ) {
				$categories['Then'][] = $api;
			}
		}
		$out = <<<'EOT'
# Behat Steps

WP-CLI makes use of a Behat-based testing framework and provides a set of custom step definitions to write feature tests.

*Behat steps documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*

***

EOT;

		self::empty_dir( WP_CLI_HANDBOOK_PATH . '/behat-steps/' );

		foreach ( $categories as $name => $apis ) {
			$out .= '## ' . $name . PHP_EOL . PHP_EOL;
			$out .= self::render( 'behat-steps-list.mustache', [ 'apis' => $apis ] );
			foreach ( $apis as $i => $api ) {
				$api['category']             = $name;
				$api['related']              = $apis;
				$api['phpdoc']['parameters'] = array_map(
					function ( $parameter ) {
						foreach ( $parameter as $key => $values ) {
							if ( isset( $values[2] ) ) {
								$values[2]         = str_replace( array( PHP_EOL ), array( '<br />' ), $values[2] );
								$parameter[ $key ] = $values;
							}
						}
						return $parameter;
					},
					$api['phpdoc']['parameters']
				);
				unset( $api['related'][ $i ] );
				$api['related']     = array_values( $api['related'] );
				$api['has_related'] = ! empty( $api['related'] );

				$api_doc = self::render( 'behat-steps.mustache', $api );
				$path    = WP_CLI_HANDBOOK_PATH . "/behat-steps/{$api['api_slug']}.md";
				if ( ! is_dir( dirname( $path ) ) ) {
					mkdir( dirname( $path ) );
				}
				file_put_contents( $path, $api_doc );
			}
			$out .= PHP_EOL . PHP_EOL;
		}

		file_put_contents( WP_CLI_HANDBOOK_PATH . '/behat-steps.md', $out );
		WP_CLI::success( 'Generated behat-steps/' );
	}

	/**
	 * Generates all command pages.
	 *
	 * ## OPTIONS
	 *
	 * [--verbose]
	 * : If set will list command pages as they are generated.
	 *
	 * @subcommand gen-commands
	 */
	public function gen_commands( $args, $assoc_args ) {
		// Check invoked with packages directory set to `bin/packages'.
		if ( ! preg_match( '/bin\/packages\/?$/', getenv( 'WP_CLI_PACKAGES_DIR' ) ) ) {
			WP_CLI::error( "Needs to be invoked on the target WP-CLI with 'WP_CLI_PACKAGES_DIR=bin/packages'." );
		}

		// Check non-bundled commands installed.
		$runner                    = WP_CLI::get_runner();
		$have_nonbundled_installed = true;
		foreach ( [ 'admin', 'find', 'profile', 'dist-archive' ] as $cmd ) {
			$have_nonbundled_installed = $have_nonbundled_installed && is_array( $runner->find_command_to_run( [ $cmd ] ) );
		}
		if ( ! $have_nonbundled_installed ) {
			WP_CLI::error( sprintf( "Install non-bundled packages by running '%s' first.", 'bin/install_packages.sh' ) );
		}

		self::empty_dir( WP_CLI_HANDBOOK_PATH . '/commands/' );

		$wp = WP_CLI::runcommand(
			'cli cmd-dump',
			[
				'launch' => false,
				'return' => 'stdout',
				'parse'  => 'json',
			]
		);

		$verbose = Utils\get_flag_value( $assoc_args, 'verbose', false );

		foreach ( $wp['subcommands'] as $cmd ) {
			if ( in_array( $cmd['name'], [ 'website', 'handbook' ], true ) ) {
				continue;
			}
			self::gen_cmd_pages( $cmd, [] /*parent*/, $verbose );
		}

		WP_CLI::success( 'Generated all command pages.' );
	}

	/**
	 * Update the commands data array with new data
	 */
	private static function update_commands_data( $command, &$commands_data, $full ) {
		$reflection = new \ReflectionClass( $command );
		$repo_url   = '';
		if ( 'help' === substr( $full, 0, 4 )
			|| 'cli' === substr( $full, 0, 3 ) ) {
			$repo_url = 'https://github.com/wp-cli/wp-cli';
		}
		if ( $reflection->hasProperty( 'when_invoked' ) ) {
			$filename     = '';
			$when_invoked = $reflection->getProperty( 'when_invoked' );
			if ( PHP_VERSION_ID < 80100 ) {
				$when_invoked->setAccessible( true );
			}
			$closure            = $when_invoked->getValue( $command );
			$closure_reflection = new \ReflectionFunction( $closure );
			// PHP stores use clause arguments of closures as static variables internally - see https://bugs.php.net/bug.php?id=71250
			$static = $closure_reflection->getStaticVariables();
			if ( is_array( $static ) && isset( $static['callable'] ) ) {
				// See `CommandFactory::create_subcommand()`.
				if ( is_array( $static['callable'] ) && isset( $static['callable'][0] ) ) {
					$reflection_class = new \ReflectionClass( $static['callable'][0] );
					$filename         = $reflection_class->getFileName();
				} elseif ( is_callable( $static['callable'] ) ) {
					$reflection_func = new \ReflectionFunction( $static['callable'] );
					$filename        = $reflection_func->getFileName();
				}
			}
			if ( $filename ) {
				preg_match( '#(?:vendor/wp-cli/|wp-cli-dev/)([^/]+)#', $filename, $matches );
				if ( ! empty( $matches[1] ) ) {
					$repo_url = 'https://github.com/wp-cli/' . $matches[1];
				}
			} else {
				WP_CLI::error( 'No callable for: ' . var_export( $static, true ) );
			}
		}
		foreach ( $command->get_subcommands() as $subcommand ) {
			$sub_full = trim( $full . ' ' . $subcommand->get_name() );
			self::update_commands_data( $subcommand, $commands_data, $sub_full );
			if ( '' === $repo_url && isset( $commands_data[ $sub_full ]['repo_url'] ) ) {
				$repo_url = $commands_data[ $sub_full ]['repo_url'];
			}
		}
		if ( $repo_url ) {
			$commands_data[ $full ] = [
				'repo_url' => $repo_url,
			];
		}
	}

	/**
	 * Generates a manifest document of all command pages.
	 *
	 * @subcommand gen-commands-manifest
	 */
	public function gen_commands_manifest() {
		$manifest      = [];
		$paths         = [
			WP_CLI_HANDBOOK_PATH . '/commands/*.md',
			WP_CLI_HANDBOOK_PATH . '/commands/*/*.md',
			WP_CLI_HANDBOOK_PATH . '/commands/*/*/*.md',
		];
		$commands_data = [];
		foreach ( WP_CLI::get_root_command()->get_subcommands() as $command ) {
			self::update_commands_data( $command, $commands_data, $command->get_name() );
		}
		foreach ( $paths as $path ) {
			foreach ( glob( $path ) as $file ) {
				$slug     = basename( $file, '.md' );
				$cmd_path = str_replace( [ WP_CLI_HANDBOOK_PATH . '/commands/', '.md' ], '', $file );
				$title    = '';
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
				$ignored = [
					'doctor',
					'google-sitemap',
					'maintenance',
					'maintenance/release',
					'super-cache',
				];
				if ( in_array( $slug, $ignored, true ) || in_array( $parent, $ignored, true ) ) {
					continue;
				}

				$manifest[ $cmd_path ] = [
					'title'           => $title,
					'slug'            => $slug,
					'cmd_path'        => $cmd_path,
					'parent'          => $parent,
					'markdown_source' => sprintf(
						'https://github.com/wp-cli/handbook/blob/main/commands/%s.md',
						$cmd_path
					),
				];
				if ( ! empty( $commands_data[ $title ] ) ) {
					$manifest[ $cmd_path ] = array_merge( $manifest[ $cmd_path ], $commands_data[ $title ] );
				}
			}
		}
		file_put_contents( WP_CLI_HANDBOOK_PATH . '/bin/commands-manifest.json', json_encode( $manifest, JSON_PRETTY_PRINT ) );
		$count = count( $manifest );
		WP_CLI::success( "Generated bin/commands-manifest.json of {$count} commands" );
	}

	/**
	 * Generates a manifest document of all handbook pages.
	 *
	 * @subcommand gen-hb-manifest
	 */
	public function gen_hb_manifest() {
		$manifest = [];

		$ignored_dirs = [
			'.git',
			'.github',
			'bin',
			'commands',
			'vendor',
		];

		$files = new \RecursiveIteratorIterator(
			new \RecursiveCallbackFilterIterator(
				new \RecursiveDirectoryIterator( WP_CLI_HANDBOOK_PATH, \RecursiveDirectoryIterator::SKIP_DOTS ),
				static function ( $file ) use ( $ignored_dirs ) {
					/** @var SplFileInfo $file */

					if ( $file->isDir() && in_array( $file->getBasename(), $ignored_dirs, true ) ) {
						return false;
					}

					if ( $file->isFile() && $file->getExtension() !== 'md' ) {
						return false;
					}

					if ( 'README.md' === $file->getBasename() ) {
						return false;
					}

					return true;
				}
			),
			\RecursiveIteratorIterator::CHILD_FIRST
		);

		foreach ( $files as $file ) {
			if ( $file->isDir() ) {
				continue;
			}

			$rel_path = str_replace( WP_CLI_HANDBOOK_PATH . '/', '', $file->getPathname() );

			$path = explode( '/', $rel_path );
			array_pop( $path );

			$parent = ! empty( $path ) ? end( $path ) : null;

			$path = implode( '/', $path );

			$slug = $file->getBasename( '.md' );

			$title    = '';
			$contents = file_get_contents( $file->getPathname() );
			if ( preg_match( '/^#\s(.+)/', $contents, $matches ) ) {
				$title = $matches[1];
			}
			$manifest[ $slug ] = [
				'title'           => $title,
				'slug'            => 'index' === $slug ? 'handbook' : $slug,
				'markdown_source' => sprintf(
					'https://github.com/wp-cli/handbook/blob/main/%s',
					$rel_path
				),
				'parent'          => $parent,
			];
		}

		ksort( $manifest );

		file_put_contents( WP_CLI_HANDBOOK_PATH . '/bin/handbook-manifest.json', json_encode( $manifest, JSON_PRETTY_PRINT ) );
		WP_CLI::success( 'Generated bin/handbook-manifest.json' );
	}

	private function get_internal_apis() {
		$apis      = [];
		$functions = get_defined_functions();
		foreach ( $functions['user'] as $function ) {
			$reflection = new \ReflectionFunction( $function );
			$phpdoc     = $reflection->getDocComment();
			if ( false === stripos( $phpdoc, '@access public' ) ) {
				continue;
			}
			$apis[] = self::get_simple_representation( $reflection );
		}

		$classes = get_declared_classes();
		foreach ( $classes as $class ) {
			if ( false === stripos( $class, 'WP_CLI' ) ) {
				continue;
			}

			$reflection = new \ReflectionClass( $class );
			foreach ( $reflection->getMethods() as $method ) {
				$method_reflection = new \ReflectionMethod( $method->class, $method->name );
				$phpdoc            = $method_reflection->getDocComment();
				if ( false === stripos( $phpdoc, '@access public' ) ) {
					continue;
				}
				$apis[] = self::get_simple_representation( $method_reflection );
			}
		}

		return $apis;
	}

	private function get_behat_steps() {
		$apis    = [];
		$classes = [
			'\WP_CLI\Tests\Context\FeatureContext',
		];

		foreach ( $classes as $class ) {
			if ( false === stripos( $class, 'WP_CLI' ) ) {
				continue;
			}

			$reflection = new \ReflectionClass( $class );
			foreach ( $reflection->getMethods() as $method ) {
				$method_reflection = new \ReflectionMethod( $method->class, $method->name );
				$phpdoc            = $method_reflection->getDocComment();
				if ( false === stripos( $phpdoc, '@access public' ) ) {
					continue;
				}
				$apis[] = self::get_simple_representation( $method_reflection );
			}
		}

		return $apis;
	}

	/**
	 * Generate and save markdown documentation for the provided command and its sub-commands.
	 *
	 * @param Command_Array $cmd        Command details as array.
	 * @param string[]      $parent     The breadcrumb of parent commands.
	 * @param bool          $verbose    Whether to output the command page as it is generated.
	 * @param ?string       $output_dir The directory to output the generated command pages, null for default `../commands`.
	 * @return void
	 */
	private static function gen_cmd_pages( $cmd, $parent = [], $verbose = false, ?string $output_dir = null ) { // phpcs:ignore Universal.NamingConventions.NoReservedKeywordParameterNames.parentFound

		$parent[] = $cmd['name'];

		static $params;
		if ( ! isset( $params ) ) {
			$params = WP_CLI::runcommand(
				'cli param-dump',
				[
					'launch' => false,
					'return' => 'stdout',
					'parse'  => 'json',
				]
			);
			// Preserve positioning of 'url' param.
			$url_param = $params['url'];
			unset( $params['url'] );
			$new_params = [];
			foreach ( $params as $param => $meta ) {
				$new_params[ $param ] = $meta;
				if ( 'path' === $param ) {
					$new_params['url'] = $url_param;
				}
			}
			$params = $new_params;
		}

		$binding                = $cmd;
		$binding['synopsis']    = implode( ' ', $parent );
		$binding['path']        = implode( '/', $parent );
		$path                   = '/commands/';
		$binding['breadcrumbs'] = '[Commands](' . $path . ')';
		foreach ( $parent as $i => $p ) {
			$path .= $p . '/';
			if ( $i < ( count( $parent ) - 1 ) ) {
				$binding['breadcrumbs'] .= " &raquo; [{$p}]({$path})";
			} else {
				$binding['breadcrumbs'] .= " &raquo; {$p}";
			}
		}
		$binding['has-subcommands'] = isset( $cmd['subcommands'] ) ? [ true ] : false;

		$hook_name        = $cmd['hook'];
		$hook_description = $hook_name ? Utils\get_hook_description( $hook_name ) : null;
		if ( $hook_description && 'after_wp_load' !== $hook_name ) {
			if ( $binding['has-subcommands'] ) {
				$binding['description'] .= "\n\nUnless overridden, these commands run on the `$hook_name` hook, $hook_description";
			} else {
				$binding['description'] .= "\n\nThis command runs on the `$hook_name` hook, $hook_description";
			}
		}

		if ( $cmd['longdesc'] ) {
			$docs = $cmd['longdesc'];
			$docs = htmlspecialchars( $docs, ENT_COMPAT, 'UTF-8' );

			// Decrease header level.
			$docs = preg_replace( '/^## /m', '### ', $docs );

			// Escape `--` so that it doesn't get converted into `&mdash;`.
			$docs = preg_replace( '/^(\[?)--/m', '\1\--', $docs );
			$docs = preg_replace( '/^\s\s--/m', '  \1\--', $docs );

			// Remove word wrapping from docs
			// Match words, '().,;', and --arg before/after the newline.
			$bits         = explode( "\n", $docs );
			$in_yaml_doc  = false;
			$in_code_bloc = false;
			$total_bits   = count( $bits );
			for ( $i = 0; $i < $total_bits; $i++ ) {
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

			// Hack to prevent double encoding in code blocks.
			$docs = preg_replace( '/ &lt; /', ' < ', $docs );
			$docs = preg_replace( '/ &gt; /', ' > ', $docs );
			$docs = preg_replace( '/ &lt;&lt;/', ' <<', $docs );
			$docs = preg_replace( '/&quot;/', '"', $docs );
			$docs = preg_replace( '/wp&gt; /', 'wp> ', $docs );
			$docs = preg_replace( '/2&gt;\//', '2>/', $docs );
			$docs = preg_replace( '/=&gt;/', '=>', $docs );
			$docs = preg_replace( '/ &amp;&amp; /', ' && ', $docs );

			$global_parameters = <<<'EOT'
These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
EOT;
			foreach ( $params as $param => $meta ) {
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
				$global_parameters .= PHP_EOL . '| `' . str_replace( '|', '\\|', $param_arg ) . '` | ' . str_replace( '|', '\\|', $meta['desc'] ) . ' |';
			}

			// Replace Global parameters with a nice table.
			if ( $binding['has-subcommands'] ) {
				$replace_global = '';
			} else {
				$replace_global = '$1' . PHP_EOL . PHP_EOL . $global_parameters;
			}
			$docs = preg_replace( '/(#?## GLOBAL PARAMETERS).+/s', $replace_global, $docs );

			$binding['docs'] = $docs;
		}

		$path = ( $output_dir ?? dirname( __DIR__ ) . '/commands' ) . '/' . $binding['path'];
		if ( ! is_dir( dirname( $path ) ) ) {
			mkdir( dirname( $path ) );
		}
		file_put_contents( "$path.md", self::render( 'subcmd-list.mustache', $binding ) );
		if ( $verbose ) {
			WP_CLI::log( 'Generated commands/' . $binding['path'] . '/' );
		}

		if ( ! isset( $cmd['subcommands'] ) ) {
			return;
		}

		foreach ( $cmd['subcommands'] as $subcmd ) {
			self::gen_cmd_pages( $subcmd, $parent, $verbose, $output_dir );
		}
	}

	/**
	 * Get a simple representation of a function or method
	 *
	 * @param Reflection
	 * @return array
	 */
	private static function get_simple_representation( $reflection ) {
		$signature  = $reflection->getName();
		$parameters = [];
		foreach ( $reflection->getParameters() as $parameter ) {
			$parameter_signature = '$' . $parameter->getName();
			if ( $parameter->isOptional() && $parameter->isDefaultValueAvailable() ) {
				$default_value = $parameter->getDefaultValue();
				if ( false === $default_value ) {
					$parameter_signature .= ' = false';
				} elseif ( [] === $default_value ) {
					$parameter_signature .= ' = []';
				} elseif ( '' === $default_value ) {
					$parameter_signature .= " = ''";
				} elseif ( null === $default_value ) {
					$parameter_signature .= ' = null';
				} elseif ( true === $default_value ) {
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
		$phpdoc = self::parse_docblock( $reflection->getDocComment() );
		$type   = strtolower( str_replace( 'Reflection', '', get_class( $reflection ) ) );
		$class  = '';
		switch ( $type ) {
			case 'method':
				$separator = $reflection->isStatic() ? '::' : '->';
				$class     = $reflection->class;
				$full_name = $class . $separator . $reflection->getName();
				$signature = $class . $separator . $signature;
				break;
			case 'function':
			default:
				$full_name = $reflection->getName();
				break;
		}

		if ( isset( $phpdoc['behat_step'] ) ) {
			$full_name = $phpdoc['behat_step'];
		}

		return [
			'phpdoc'     => $phpdoc,
			'type'       => $type,
			'signature'  => $signature,
			'short_name' => $reflection->getShortName(),
			'full_name'  => $full_name,
			'class'      => $class,
		];
	}

	/**
	 * Parse PHPDoc into a structured representation.
	 *
	 * @param string $docblock
	 * @return array
	 */
	private static function parse_docblock( $docblock ) {
		$ret        = [
			'description' => '',
			'parameters'  => [],
		];
		$extra_line = '';
		$in_param   = false;
		foreach ( preg_split( "/(\r?\n)/", $docblock ) as $line ) {
			if ( preg_match( '/^(?=\s+?\*[^\/])(.+)/', $line, $matches ) ) {
				$info = trim( $matches[1] );
				$info = preg_replace( '/^(\*\s+?)/', '', $info );
				if ( $in_param ) {
					list( $param_name, $key )                     = $in_param;
					$ret['parameters'][ $param_name ][ $key ][2] .= PHP_EOL . $info;
					if ( '}' === substr( $info, -1 ) ) {
						$in_param = false;
					}
				} elseif ( '@' !== $info[0] ) {
					$ret['description'] .= PHP_EOL . "{$extra_line}{$info}";
				} else {
					preg_match( '/@(\w+)/', $info, $matches );
					$param_name = $matches[1];
					$value      = str_replace( "@$param_name ", '', $info );

					if ( in_array( $param_name, [ 'Given', 'Then', 'When' ], true ) ) {
						$ret['behat_step'] = "$param_name $value";
					}

					if ( ! isset( $ret['parameters'][ $param_name ] ) ) {
						$ret['parameters'][ $param_name ] = [];
					}
					$ret['parameters'][ $param_name ][] = preg_split( '/[\s]+/', $value, 3 );
					end( $ret['parameters'][ $param_name ] );
					$key = key( $ret['parameters'][ $param_name ] );
					reset( $ret['parameters'][ $param_name ] );
					if ( ! empty( $ret['parameters'][ $param_name ][ $key ][2] )
						&& '{' === substr( $ret['parameters'][ $param_name ][ $key ][2], -1 ) ) {
						$in_param = [ $param_name, $key ];
					}
				}
				$extra_line = '';
			} else {
				$extra_line .= PHP_EOL;
			}
		}
		$ret['description'] = str_replace( '\/', '/', trim( $ret['description'], PHP_EOL ) );
		$bits               = explode( PHP_EOL, $ret['description'] );
		$short_desc         = [ array_shift( $bits ) ];
		while ( isset( $bits[0] ) && ! empty( $bits[0] ) ) {
			$short_desc[] = array_shift( $bits );
		}
		$ret['short_description'] = trim( implode( ' ', $short_desc ) );
		$long_description         = trim( implode( PHP_EOL, $bits ), PHP_EOL );
		$ret['long_description']  = $long_description;
		return $ret;
	}

	private static function render( $path, $binding ) {
		$m        = new Mustache_Engine();
		$template = file_get_contents( WP_CLI_HANDBOOK_PATH . "/bin/templates/$path" );
		return $m->render( $template, $binding );
	}

	/**
	 * Removes existing contents of given directory.
	 *
	 * @param string $dir Name of directory to empty.
	 */
	private static function empty_dir( $dir ) {
		$cmd = Utils\esc_cmd( 'rm -rf %s', $dir );
		$pr  = WP_CLI::launch( $cmd, false /*exit_on_error*/, true /*return_detailed*/ ); // Won't fail if directory doesn't exist.
		if ( $pr->return_code ) {
			WP_CLI::error( sprintf( 'Failed to `%s`: (%d) %s', $cmd, $pr->return_code, $pr->stderr ) );
		}
		if ( ! mkdir( $dir ) ) {
			$error = error_get_last();
			WP_CLI::error( sprintf( "Failed to create '%s' directory: %s", $dir, $error['message'] ) );
		}
		WP_CLI::log( sprintf( "Removed existing contents of '%s'", $dir ) );
	}

	/**
	 * Generate the documentation page for a custom command using the same templates as the official WP-CLI commands.
	 *
	 * ## OPTIONS
	 *
	 * <command>
	 * : The custom WP CLI command to generate the documentation for.
	 *
	 * [--output_dir=<output_dir>]
	 * : Directory in which to save the documentation.
	 * ---
	 * default: ./docs/wp-cli
	 * ---
	 *
	 * [--verbose]
	 * : If set will list command pages as they are generated.
	 *
	 * @subcommand gen-custom
	 *
	 * @when after_wp_load
	 *
	 * @param string[]             $args
	 * @param array<string,string> $assoc_args
	 * @return void
	 */
	public function gen_custom_cmd_pages( $args, $assoc_args ) {

		$command_name = $args[0];

		$output_dir = Utils\is_path_absolute( $assoc_args['output_dir'] )
			? $assoc_args['output_dir']
			: getcwd() . '/' . $assoc_args['output_dir'];

		if ( ! is_dir( $output_dir ) ) {
			mkdir( $output_dir, 0777, true );
		}

		$verbose = Utils\get_flag_value( $assoc_args, 'verbose', false );

		/**
		 * Get all registered WP-CLI commands.
		 *
		 * @see \CLI_Command::cmd_dump()
		 *
		 * @var array{name:string,description:string,longdesc:string,subcommands:array<Command_Array>} $all_commands
		 */
		$all_commands = WP_CLI::runcommand(
			'cli cmd-dump',
			[
				'launch' => false,
				'return' => 'stdout',
				'parse'  => 'json',
			]
		);

		/**
		 * Filter the list of WP-CLI commands to find one matching the name passed as an argument to this command.
		 *
		 * @var array<Command_Array> $my_commands
		 */
		$my_commands = array_values(
			array_filter(
				$all_commands['subcommands'],
				function ( array $command ) use ( $command_name ): bool {
					return $command['name'] === $command_name;
				}
			)
		);

		if ( empty( $my_commands ) ) {
			WP_CLI::error( "Failed to find command '{$command_name}'." );
		}

		self::gen_cmd_pages( $my_commands[0], [], $verbose, $output_dir );

		WP_CLI::success( "Generated command pages for '{$command_name}'." );
	}
}

WP_CLI::add_command( 'handbook', '\WP_CLI\Handbook\Command' );
