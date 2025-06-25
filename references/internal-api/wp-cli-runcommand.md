# WP_CLI::runcommand()

Run a WP-CLI command.

***

## Usage

    WP_CLI::runcommand( $command, $options = [] )

<div>
<strong>$command</strong> (string) WP-CLI command to run, including arguments.<br />
<strong>$options</strong> (array) {<br />    Configuration options for command execution.<br />    @type bool        $launch     Launches a new process (true) or reuses the existing process (false). Default: true.<br />    @type bool        $exit_error Halts the script on error. Default: true.<br />    @type bool|string $return     Returns output as an object when set to 'all' (string), return just the 'stdout', 'stderr', or 'return_code' (string) of command, or print directly to stdout/stderr (false). Default: false.<br />    @type bool|string $parse      Parse returned output as 'json' (string); otherwise, output is unchanged (false). Default: false.<br />@param array $command_args Contains additional command line arguments for the command. Each element represents a single argument. Default: empty array.<br />}<br />
<strong>@return</strong> (mixed) <br />
</div>


***

## Notes

Launches a new child process to run a specified WP-CLI command.
Optionally:

* Run the command in an existing process.
* Prevent halting script execution on error.
* Capture and return STDOUT, or full details about command execution.
* Parse JSON output if the command rendered it.
* Include additional arguments that are passed to the command.

```
$options = array(
  'return'       => true,                // Return 'STDOUT'; use 'all' for full object.
  'parse'        => 'json',              // Parse captured STDOUT to JSON array.
  'launch'       => false,               // Reuse the current process.
  'exit_error'   => true,                // Halt script execution on error.
  'command_args' => [ '--skip-themes' ], // Additional arguments to be passed to the $command.
);
$plugins = WP_CLI::runcommand( 'plugin list --format=json', $options );
```


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-launch/">WP_CLI::launch()</a></strong> - Launch an arbitrary external process that takes over I/O.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-launch-self/">WP_CLI::launch_self()</a></strong> - Run a WP-CLI command in a new process reusing the current runtime arguments.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-run-command/">WP_CLI::run_command()</a></strong> - Run a given command within the current process using the same global parameters.</li>



</ul>


