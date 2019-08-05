# WP_CLI::runcommand()

Run a WP-CLI command. Optionnaly modify the context in which the command runs and how the result is processed.

***

## Usage

`WP_CLI::runcommand( $command, $options = array() )`

**$command** (string) WP-CLI command to run, including arguments.

**$options** (array) Optional. An associative array with additional configuration options for command execution.

Type | Key | Description | Default
------------ | ------------- | ------------ | -------------
bool | $launch | Launch a new process, or reuse the existing. | true
bool | $exit_error | Exit on error. | true
bool|string | $return | Capture and return output, or render in realtime. | false
bool|string | $parse | Parse returned output as a particular format. | false

**@return** (mixed)


***

## Notes

- The `$command` should not be prefixed with `wp` like in the terminal context (ie: `WP_CLI::runcommand( 'plugin list --format=json', $options )`) 
- $options['parse'] currently only supports `'json'` and should be used in conjunction to `$options['return']=true` and `--format=json` to automaticly parse command results into an associative array. Note that the command itself needs to support `--format=json`.
- $options['return'] accepts the following value:
    - `false` command result is not captured.
    - `true` or `'stdout'` will capture and return the standard output.
    - `'stderr'` will capture and return the standard error file descriptor.
    - `'return_code'` will capture and return the process exit code.
    - `'all'` will capture all outputs and errors and will return a stdClass object.


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-launch/">WP_CLI::launch()</a></strong> - Launch an arbitrary external process that takes over I/O.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-launch-self/">WP_CLI::launch_self()</a></strong> - Run a WP-CLI command in a new process reusing the current runtime arguments.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-run-command/">WP_CLI::run_command()</a></strong> - Run a given command within the current process using the same global parameters.</li>



</ul>


