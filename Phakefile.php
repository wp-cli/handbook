<?php
require __DIR__ . '/vendor/autoload.php';

function invoke_wp_cli( $cmd, $app ) {
	$cmd .= ' --path=' . escapeshellarg( $app['path'] );

	ob_start();
	system( $cmd, $return_code );
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

desc( 'Generate a list of commands with all accepted arguments on STDOUT.' );
task( 'syn-list', function( $app ) {
	function generate_synopsis( $command, $path = '' ) {
		$full_path = $path . ' ' . $command['name'];

		if ( !isset( $command['subcommands'] ) ) {
			echo $full_path . ' ' . $command['synopsis'] . "\n";
		} else {
			foreach ( $command['subcommands'] as $subcommand ) {
				generate_synopsis( $subcommand, $full_path );
			}
		}
	}

	generate_synopsis( invoke_wp_cli( 'wp --cmd-dump', $app ) );
});

function gen_cmd_pages( $wp_cli_path, $cmd, $parent = array() ) {
	$parent[] = $cmd['name'];

	$binding = $cmd;
	$binding['synopsis'] = implode( ' ', $parent );
	$binding['path'] = implode( '/', $parent );
	$binding['has-subcommands'] = isset( $cmd['subcommands'] ) ? array(true) : false;

	$docs_path = $wp_cli_path . '/man-src/' . implode( '-', $parent ) . '.txt';
	if ( is_readable( $docs_path ) ) {
		$docs = file_get_contents( $docs_path );
		$docs = preg_replace( '/^## /m', '### ', $docs );
		$docs = preg_replace( '/\n\* `(.+)`([^\n]*):\n\n/', "\n\t\\1\\2\n\t\t", $docs );
		$binding['docs'] = $docs;
	}

	$path = __DIR__ . "/commands/" . $binding['path'];
	mkdir( $path );
	file_put_contents( "$path/index.md", render( 'subcmd-list.mustache', $binding ) );

	if ( !isset( $cmd['subcommands'] ) )
		return;

	foreach ( $cmd['subcommands'] as $subcmd ) {
		gen_cmd_pages( $wp_cli_path, $subcmd, $parent );
	}
}

desc( 'Update the /commands/ page.' );
task( 'cmd-list', function( $app ) {
	$wp = invoke_wp_cli( 'wp --cmd-dump', $app );

	// generate main page
	file_put_contents( '_includes/cmd-list.html', render( 'cmd-list.mustache', $wp ) );

	system( sprintf( 'rm -rf %s/commands/*/', escapeshellarg( __DIR__ ) ) );

	foreach ( $wp['subcommands'] as $cmd ) {
		gen_cmd_pages( $app['path'], $cmd );
	}
});

desc( 'Update the /config/ page.' );
task( 'param-list', function( $app ) {
	$config_spec = invoke_wp_cli( 'wp --param-dump', $app );

	$out = '';

	foreach ( $config_spec as $key => $details ) {
		if ( isset( $details['deprecated'] ) )
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

		$description = $details['desc'];

		$out .= render( 'config.mustache', compact( 'config', 'flag', 'default', 'description' ) );
	}

	file_put_contents( '_includes/param-list.html', $out );
});

desc( 'Build the site.' );
task( 'default', 'cmd-list', 'param-list' );

