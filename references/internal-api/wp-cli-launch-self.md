# WP_CLI::launch_self()

Run a WP-CLI command in a new process reusing the current runtime arguments.

***

## Usage

    WP_CLI::launch_self( $command, $args = [], $assoc_args = [], $exit_on_error = true, $return_detailed = false, $runtime_args = [] )

<div>
<strong>$command</strong> (string) WP-CLI command to call.<br />
<strong>$args</strong> (array) Positional arguments to include when calling the command.<br />
<strong>$assoc_args</strong> (array) Associative arguments to include when calling the command.<br />
<strong>$exit_on_error</strong> (bool) Whether to exit if the command returns an elevated return code.<br />
<strong>$return_detailed</strong> (bool) Whether to return an exit status (default) or detailed execution results.<br />
<strong>$runtime_args</strong> (array) Override one or more global args (path,url,user,allow-root)<br />
<strong>@return</strong> (int|ProcessRun) command exit status, or a ProcessRun instance<br />
</div>


***

## Notes

Use `WP_CLI::runcommand()` instead, which is easier to use and works better.

Note: While this command does persist a limited set of runtime arguments,
it *does not* persist environment variables. Practically speaking, WP-CLI
packages won't be loaded when using WP_CLI::launch_self() because the
launched process doesn't have access to the current process $HOME.


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-launch/">WP_CLI::launch()</a></strong> - Launch an arbitrary external process that takes over I/O.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-runcommand/">WP_CLI::runcommand()</a></strong> - Run a WP-CLI command.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-run-command/">WP_CLI::run_command()</a></strong> - Run a given command within the current process using the same global parameters.</li>



</ul>


