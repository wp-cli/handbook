<?php

function invoke_wp_cli( $cmd, $app ) {
	$cmd .= ' --path=' . escapeshellarg( $app['path'] );

	ob_start();
	system( $cmd, $return_code );
	$json = ob_get_clean();

	if ( $return_code ) {
		echo "wp-cli returned error code: $return_code\n";
		exit(1);
	}

	return json_decode( $json, true );
}

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

task( 'cmd-list', function( $app ) {
	$wp = invoke_wp_cli( 'wp --cmd-dump', $app );

	$out = '';

	foreach ( $wp['subcommands'] as $command ) {
		$out .= <<<EOB
	<tr>
		<td><a href="https://github.com/wp-cli/wp-cli/blob/master/php/commands/{$command['name']}.php">{$command['name']}</a></td>
		<td>{$command['description']}</td>
	</tr>

EOB;
	}

	file_put_contents( '_includes/cmd-list.html', $out );
});

task( 'default', 'cmd-list' );

