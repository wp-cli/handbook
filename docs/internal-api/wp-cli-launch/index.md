---
layout: default
title: WP_CLI::launch()
description: "Launch an arbitrary external process that takes over I/O."
---

<a href="/docs/">Docs</a> &raquo; <a href="/docs/internal-api/">Internal API</a> &raquo; Execution

## WP_CLI::launch()

Launch an arbitrary external process that takes over I/O.

***

### Usage

    WP_CLI::launch( $command, $exit_on_error = true, $return_detailed = false )

<div>
<strong>$command</strong> (string) External process to launch.<br />
<strong>$exit_on_error</strong> (boolean) Whether to exit if the command returns an elevated return code.<br />
<strong>$return_detailed</strong> (boolean) Whether to return an exit status (default) or detailed execution results.<br />
<strong>@return</strong> (int|ProcessRun) command exit status, or a ProcessRun object for full details.<br />
</div>


***

### Notes


    # `wp core download` falls back to the `tar` binary when PharData isn't available
    if ( ! class_exists( 'PharData' ) ) {
        $cmd = "tar xz --strip-components=1 --directory=%s -f $tarball";
        WP_CLI::launch( Utils\esc_cmd( $cmd, $dest ) );
        return;
    }
    


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-launch-self/">WP_CLI::launch_self()</a></strong> - Run a WP-CLI command in a new process reusing the current runtime arguments.</li>


<li><strong><a href="/docs/internal-api/wp-cli-run-command/">WP_CLI::run_command()</a></strong> - Run a given command within the current process using the same global</li>



</ul>


