---
layout: default
title: WP_CLI::run_command()
description: "Run a given command within the current process using the same global"
---

<small><a href="/docs/">Docs</a> &raquo; <a href="/docs/internal-api/">Internal API</a> &raquo; Execution</small>

## WP_CLI::run_command()

Run a given command within the current process using the same global

***

### Usage

    WP_CLI::run_command( $args, $assoc_args = array() )

<div>
<strong>$args</strong> (array) Positional arguments including command name.<br />
<strong>$assoc_args</strong> (array) <br />
</div>


***

### Notes

parameters.

Use `WP_CLI::runcommand()` instead, which is easier to use and works better.

To run a command using a new process with the same global parameters,
use WP_CLI::launch_self(). To run a command using a new process with
different global parameters, use WP_CLI::launch().


    ob_start();
    WP_CLI::run_command( array( 'cli', 'cmd-dump' ) );
    $ret = ob_get_clean();
    


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-launch/">WP_CLI::launch()</a></strong> - Launch an arbitrary external process that takes over I/O.</li>


<li><strong><a href="/docs/internal-api/wp-cli-launch-self/">WP_CLI::launch_self()</a></strong> - Run a WP-CLI command in a new process reusing the current runtime arguments.</li>


<li><strong><a href="/docs/internal-api/wp-cli-runcommand/">WP_CLI::runcommand()</a></strong> - Run a WP-CLI command.</li>



</ul>


