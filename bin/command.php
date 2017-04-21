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
	 * Dump internal API PHPDoc to JSON
	 *
	 * @subcommand api-dump
	 */
	public function api_dump() {
		$apis = array();
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

