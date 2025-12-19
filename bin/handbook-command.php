<?php

if ( ! class_exists( 'WP_CLI' ) ) {
	return;
}

$wpcli_handbook_autoloader = dirname( __DIR__ ) . '/vendor/autoload.php';

if ( file_exists( $wpcli_handbook_autoloader ) ) {
	require_once $wpcli_handbook_autoloader;
}

WP_CLI::add_command( 'handbook', '\WP_CLI\Handbook\Handbook_Command' );
