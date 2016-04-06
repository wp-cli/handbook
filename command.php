<?php
namespace WP_CLI_Org;
/**
 * WP-CLI commands for generating the docs
 */

/**
 * Dump the list of internal APIs, as JSON.
 *
 * Used to build user-facing docs of public APIs.
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
\WP_CLI::add_command( 'cli api-dump', '\WP_CLI_Org\api_dump' );

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
					$in_param = array( $param, $key );
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
