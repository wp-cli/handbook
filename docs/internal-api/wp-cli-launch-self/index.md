---
layout: default
title: WP_CLI::launch_self()
description: Run a WP-CLI command in a new process reusing the current runtime arguments.
---

<a href="/docs/">Docs</a> &raquo; <a href="/docs/internal-api/">Internal API</a> &raquo; Execution

## WP_CLI::launch_self()

Run a WP-CLI command in a new process reusing the current runtime arguments.

***

### Usage

    WP_CLI::launch_self( $command, $args = array(), $assoc_args = array(), $exit_on_error = true, $return_detailed = array(), $runtime_args = array() )

<div>
<strong>$command</strong> (string) WP-CLI command to call.<br />
<strong>$args</strong> (array) Positional arguments to include when calling the command.<br />
<strong>$assoc_args</strong> (array) Associative arguments to include when calling the command.<br />
<strong>$exit_on_error</strong> (bool) Whether to exit if the command returns an elevated return code.<br />
<strong>$return_detailed</strong> (bool) Whether to return an exit status (default) or detailed execution results.<br />
<strong>$runtime_args</strong> (array) Override one or more global args (path,url,user,allow-root)<br />
<strong>@return</strong> (int|ProcessRun) command exit status, or a ProcessRun instance<br /></p>
</div>


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-launch/">WP_CLI::launch()</a></strong> - Launch an arbitrary external process that takes over I/O.</li>



</ul>


