---
layout: default
title: WP_CLI::launch()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Execution

## WP_CLI::launch()

Launch an arbitrary external process that takes over I/O.

***

### Usage

    WP_CLI::launch( $command, $exit_on_error = true, $return_detailed = array() )

<div>
<strong>Command</strong> (string) to call<br />
<strong>Whether</strong> (bool) to exit if the command returns an error status<br />
<strong>Whether</strong> (bool) to return an exit status (default) or detailed execution results.<br />
<strong>@return</strong> (int|ProcessRun) command exit status, or a ProcessRun instance<br /></p>
</div>





