---
layout: default
title: WP_CLI::runcommand()
description: "Run a WP-CLI command."
---

<small><a href="/docs/">Docs</a> &raquo; <a href="/docs/internal-api/">Internal API</a> &raquo; Execution</small>

## WP_CLI::runcommand()

Run a WP-CLI command.

***

### Usage

    WP_CLI::runcommand( $command, $options = array() )

<div>
<strong>$command</strong> (string) WP-CLI command to run, including arguments.<br />
<strong>$options</strong> (array) Configuration options for command execution.<br />
<strong>@return</strong> (mixed) <br />
</div>


***

### Notes

Launch a new child process, or run the command in the current process.
Optionally:
* Prevent halting script execution on error.
* Capture and return STDOUT, or full details about command execution.
* Parse JSON output if the command rendered it.


    $options = array(
      'return'     => true,  // Return 'STDOUT'; use 'all' for full object.
      'parse'      => 'json' // Parse captured STDOUT to JSON array.
      'launch'     => false, // Reuse the current process.
      'exit_error' => true,  // Halt script execution on error.
    );
    $plugins = WP_CLI::runcommand( 'plugin list --format=json', $options );
    


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-launch/">WP_CLI::launch()</a></strong> - Launch an arbitrary external process that takes over I/O.</li>


<li><strong><a href="/docs/internal-api/wp-cli-launch-self/">WP_CLI::launch_self()</a></strong> - Run a WP-CLI command in a new process reusing the current runtime arguments.</li>


<li><strong><a href="/docs/internal-api/wp-cli-run-command/">WP_CLI::run_command()</a></strong> - Run a given command within the current process using the same global</li>



</ul>


