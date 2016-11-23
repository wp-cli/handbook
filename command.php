<?php
namespace WP_CLI_Org;

use WP_CLI;
use Mustache_Engine;

/**
 * WP-CLI commands for generating the docs
 */

/**
 * Run all generation commands to generate full website.
 *
 * @when before_wp_load
 */
function generate() {
	generate_homepage();
	generate_config();
	generate_contributing();
	generate_commands();
	generate_docs();
	generate_internal_api_docs();
}
WP_CLI::add_command( 'website generate', 'WP_CLI_Org\generate' );

/**
 * Generate the homepage from WP-CLI's README.md
 *
 * @when before_wp_load
 */
function generate_homepage() {

	$ret = trim( shell_exec( 'which wp' ) );
	if ( empty( $ret ) ) {
		WP_CLI::error( 'Could not find path to wp executable.' );
	}
	if ( 'link' === filetype( $ret ) ) {
		$ret = readlink( $ret );
	}

	$readme_path = dirname( dirname( $ret ) ) . '/README.md';
	if ( ! is_file( $readme_path ) ) {
		WP_CLI::error( 'Could not find README.md in wp executable PATH. Please make sure wp executable points to git clone.' );
	}

	$contents = file_get_contents( $readme_path );
	$search = <<<EOT
WP-CLI
======
EOT;
	$replace = <<<EOT
---
layout: default
title: Command line interface for WordPress
---
EOT;
	$contents = str_replace( $search, $replace, $contents );
	file_put_contents( dirname( __FILE__ ) . '/index.md', $contents );
	WP_CLI::success( 'Updated index.md from project README.md.' );
}
WP_CLI::add_command( 'website generate-homepage', '\WP_CLI_Org\generate_homepage' );

/**
 * Generate the /config/ page.
 *
 * @when before_wp_load
 */
function generate_config() {
	$config_spec = invoke_wp_cli( 'wp cli param-dump' );

	$out = '';

	$global_args = array();
	foreach ( $config_spec as $key => $details ) {
		if ( isset( $details['hidden'] ) || isset( $details['deprecated'] ) )
			continue;

		if ( false !== $details['file'] ) {
			$config = "$key: " . $details['file'];
		} else {
			$config = '';
		}

		if ( false !== $details['runtime'] ) {
			$flag = ( true === $details['runtime'] )
				? "--[no-]$key"
				: "--$key" . $details['runtime'];
		} else {
			$flag = '';
		}

		$default = json_encode( $details['default'] );

		$description = ( isset( $details['desc'] ) ) ? $details['desc'] : '';

		$out .= render( 'config.mustache', compact( 'config', 'flag', 'default', 'description' ) );
		if ( ! empty( $flag ) ) {
			$global_args[] = array(
				'flag'        => $flag,
				'description' => $description,
			);
		}
	}

	file_put_contents( '_includes/param-list.html', $out );
	file_put_contents( '_includes/global-parameters.html', render( 'global-parameters.mustache', array( 'args' => $global_args ) ) );
	WP_CLI::success( 'Generated /config/' );
}
WP_CLI::add_command( 'website generate-config', '\WP_CLI_Org\generate_config' );

/**
 * Generate the contributing page from WP-CLI's CONTRIBUTING.md
 *
 * @when before_wp_load
 */
function generate_contributing() {
	$ret = trim( shell_exec( 'which wp' ) );
	if ( empty( $ret ) ) {
		WP_CLI::error( 'Could not find path to wp executable.' );
	}
	if ( 'link' === filetype( $ret ) ) {
		$ret = readlink( $ret );
	}

	$contributing_path = dirname( dirname( $ret ) ) . '/CONTRIBUTING.md';
	if ( ! is_file( $contributing_path ) ) {
		WP_CLI::error( 'Could not find CONTRIBUTING.md in wp executable PATH. Please make sure wp executable points to git clone.' );
	}

	$contents = file_get_contents( $contributing_path );
	$search = <<<EOT
Contributing
============
EOT;
	$replace = <<<EOT
---
layout: doc
title: Contributing
category: Contributing
description: An introduction to the contributing process.
quick_links:
  - Reporting a bug
  - Creating a pull request
  - Improving our documentation
---
EOT;
	$contents = str_replace( $search, $replace, $contents );
	file_put_contents( dirname( __FILE__ ) . '/docs/contributing/index.md', $contents );
	WP_CLI::success( 'Updated docs/contributing/index.md from project CONTRIBUTING.md.' );
}
WP_CLI::add_command( 'website generate-contributing', '\WP_CLI_Org\generate_contributing' );

/**
 * Generate the /commands/ page.
 *
 * @when before_wp_load
 */
function generate_commands() {
	$wp = invoke_wp_cli( 'wp --skip-packages cli cmd-dump' );

	foreach( $wp['subcommands'] as $k => $cmd ) {
		if ( in_array( $cmd['name'], array( 'website', 'api-dump' ) ) ) {
			unset( $wp['subcommands'][ $k ] );
		}
	}
	$wp['subcommands'] = array_values( $wp['subcommands'] );

	// generate main page
	file_put_contents( '_includes/cmd-list.html', render( 'cmd-list.mustache', $wp ) );
	WP_CLI::log( 'Generated /commands/' );

	foreach ( $wp['subcommands'] as $cmd ) {
		gen_cmd_pages( $cmd );
	}
	WP_CLI::success( 'Generated all command pages.' );
}
WP_CLI::add_command( 'website generate-commands', '\WP_CLI_Org\generate_commands' );

/**
 * Generate the /docs/ page.
 *
 * @when before_wp_load
 */
function generate_docs() {
	$docs = array(
		'Guides'       => array(
			'Installing'  => array(),
			'Quick start' => array(),
		),
		'References'   => array(
			'Global parameters' => array(
				'path'        => '/config/',
				'title'       => 'Global parameters',
				'description' => 'Variables defining how a command is executed, including which WordPress user the command is run as and which WordPress instance the command is run against.',
			),
			'Built-in commands' => array(
				'path'        => '/commands/',
				'title'       => 'Built-in commands',
				'description' => 'Commands included in every copy of WP-CLI.',
			),
			'Package index' => array(
				'path'        => '/package-index/',
				'title'       => 'Package index',
				'description' => 'Commands maintained and supported by the community.',
			),
			'Internal API' => array(),
		),
		'Contributing' => array(),
		'Misc'         => array(),
	);
	foreach( glob( __DIR__ . '/docs/*/index.md' ) as $file ) {
		$contents = file_get_contents( $file );
		$parts = explode( '---', $contents );
		$header = $parts[1];
		preg_match( '#category:\s(.+)#', $header, $matches );
		if ( ! empty( $matches[1] ) && array_key_exists( $matches[1], $docs ) ) {
			$category = $matches[1];
		} else {
			$category = 'Misc';
		}
		preg_match( '#title:\s(.+)#', $header, $matches );
		$title = ! empty( $matches[1] ) ? $matches[1] : '';
		preg_match( '#description:\s(.+)#', $header, $matches );
		$description = ! empty( $matches[1] ) ? $matches[1] : '';
		if ( ! isset( $docs[ $category ][ $title ] ) ) {
			$docs[ $category ][ $title ] = array();
		}
		$docs[ $category ][ $title ]['path'] = '/docs/' . basename( dirname( $file ) ) . '/';
		$docs[ $category ][ $title ]['title'] = $title;
		$docs[ $category ][ $title ]['description'] = $description;
	}
	$out = '';
	foreach( $docs as $category => $cat_docs ) {
		if ( empty( $cat_docs ) ) {
			continue;
		}
		$cat_slug = strtolower( $category );
		$out .= '<h3 id="' . $cat_slug . '">' . $category . '</h3>' . PHP_EOL . PHP_EOL;
		$out .= '<ul>' . PHP_EOL;
		foreach( $cat_docs as $cat_doc ) {
			$out .= '<li><a href="' . $cat_doc['path'] . '"><strong>' . $cat_doc['title'] . '</strong></a>';
			if ( ! empty( $cat_doc['description'] ) ) {
				$out .= ' - ' . $cat_doc['description'];
			}
			$out .= '</li>' . PHP_EOL;
		}
		$out .= '</ul>' . PHP_EOL . PHP_EOL;
	}

	file_put_contents( '_includes/doc-list.html', $out );
	WP_CLI::success( 'Generated /docs/' );
}
WP_CLI::add_command( 'website generate-docs', '\WP_CLI_Org\generate_docs' );

/**
 * Generate the /docs/internal-apis/ page.
 *
 * @when before_wp_load
 */
function generate_internal_api_docs() {
	$apis = invoke_wp_cli( 'wp api-dump' );
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

	$prepare_code_block = function( $description ) {
		return preg_replace_callback( '#```(.+)```#Us', function( $matches ) {
			return str_replace( PHP_EOL, PHP_EOL . '    ', $matches[1] );
		}, $description );
	};

	foreach( $apis as $api ) {

		$api['api_slug'] = $prepare_api_slug( $api['full_name'] );
		$api['phpdoc']['long_description'] = $prepare_code_block( $api['phpdoc']['long_description'] );

		if ( ! empty( $api['phpdoc']['parameters']['category'][0][0] )
			&& isset( $categories[ $api['phpdoc']['parameters']['category'][0][0] ] ) ) {
			$categories[ $api['phpdoc']['parameters']['category'][0][0] ][] = $api;
		} else {
			$categories['Misc'][] = $api;
		}
	}
	$out = '***' . PHP_EOL . PHP_EOL;

	foreach( $categories as $name => $apis ) {
		$out .= '## ' . $name . PHP_EOL . PHP_EOL;
		$out .= render( 'internal-api-list.mustache', array( 'apis' => $apis ) );
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
			$api_doc = render( 'internal-api.mustache', $api );
			$path = "docs/internal-api/{$api['api_slug']}";
			if ( ! is_dir( $path ) ) {
				mkdir( $path );
			}
			file_put_contents( "$path/index.md", $api_doc );
		}
		$out .= PHP_EOL . PHP_EOL;
	}

	file_put_contents( '_includes/internal-api-list.html', $out );
	WP_CLI::success( 'Generated /docs/internal-api/' );
}
WP_CLI::add_command( 'website generate-internal-api-docs', '\WP_CLI_Org\generate_internal_api_docs' );

/**
 * Dump the list of internal APIs, as JSON.
 *
 * Used to build user-facing docs of public APIs.
 *
 * @when before_wp_load
 *
 * @subcommand api-dump
 */
function api_dump() {
	$apis = array();
	$functions = get_defined_functions();
	foreach( $functions['user'] as $function ) {
		$reflection = new \ReflectionFunction( $function );
		$phpdoc = $reflection->getDocComment();
		if ( false === stripos( $phpdoc, '@access public' ) ) {
			continue;
		}
		$apis[] = get_simple_representation( $reflection );
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
			$apis[] = get_simple_representation( $method_reflection );
		}
	}
	echo json_encode( $apis );
}
\WP_CLI::add_command( 'api-dump', '\WP_CLI_Org\api_dump' );

/**
 * Get a simple representation of a function or method
 *
 * @param Reflection
 * @return array
 */
function get_simple_representation( $reflection ) {
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
		'phpdoc'       => parse_docblock( $phpdoc ),
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
function parse_docblock( $docblock ) {
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

function gen_cmd_pages( $cmd, $parent = array() ) {
	$parent[] = $cmd['name'];

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

		// hack to prevent double encoding in code blocks
		$docs = preg_replace( '/ &lt; /', ' < ', $docs );
		$docs = preg_replace( '/ &gt; /', ' > ', $docs );
		$docs = preg_replace( '/ &lt;&lt;/', ' <<', $docs );
		$docs = preg_replace( '/&quot;/', '"', $docs );

		// Strip global parameters -> added in footer
		$docs = preg_replace( '/#?## GLOBAL PARAMETERS.+/s', '', $docs );

		$binding['docs'] = $docs;
		$binding['github_issues_link'] = 'https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3A' . urlencode( 'command:' . str_replace( ' ', '-', $binding['synopsis'] ) ) . '+sort%3Aupdated-desc';
	}

	$path = __DIR__ . "/commands/" . $binding['path'];
	if ( !is_dir( $path ) ) {
		mkdir( $path );
	}
	file_put_contents( "$path/index.md", render( 'subcmd-list.mustache', $binding ) );
	WP_CLI::log( 'Generated /commands/' . $binding['path'] . '/' );

	if ( !isset( $cmd['subcommands'] ) )
		return;

	foreach ( $cmd['subcommands'] as $subcmd ) {
		gen_cmd_pages( $subcmd, $parent );
	}
}

function invoke_wp_cli( $cmd ) {
	ob_start();
	system( "WP_CLI_CONFIG_PATH=/dev/null $cmd", $return_code );
	$json = ob_get_clean();

	if ( $return_code ) {
		echo "WP-CLI returned error code: $return_code\n";
		exit(1);
	}

	return json_decode( $json, true );
}

function render( $path, $binding ) {
	$m = new Mustache_Engine;
	$template = file_get_contents( __DIR__ . "/_templates/$path" );
	return $m->render( $template, $binding );
}
