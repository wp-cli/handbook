# Internal API

WP-CLI includes a number of utilities which are considered stable and meant to be used by commands.

This also means functions and methods not listed here are considered part of the private API. They may change or disappear at any time.

*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*

***
## Registration

<ul>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-add-hook/">WP_CLI::add_hook()</a></strong> - Schedule a callback to be executed at a certain point.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-do-hook/">WP_CLI::do_hook()</a></strong> - Execute callbacks registered to a given hook.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-add-wp-hook/">WP_CLI::add_wp_hook()</a></strong> - Add a callback to a WordPress action or filter.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-add-command/">WP_CLI::add_command()</a></strong> - Register a command to WP-CLI.</li>


</ul>


## Output

<ul>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-make-progress-bar/">WP_CLI\Utils\make_progress_bar()</a></strong> - Create a progress bar to display percent completion of a given operation.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-format-items/">WP_CLI\Utils\format_items()</a></strong> - Render a collection of items as an ASCII table, JSON, CSV, YAML, list of ids, or count.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-colorize/">WP_CLI::colorize()</a></strong> - Colorize a string for output.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-line/">WP_CLI::line()</a></strong> - Display informational message without prefix, and ignore `--quiet`.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-log/">WP_CLI::log()</a></strong> - Display informational message without prefix.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-success/">WP_CLI::success()</a></strong> - Display success message prefixed with &quot;Success: &quot;.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-debug/">WP_CLI::debug()</a></strong> - Display debug message prefixed with &quot;Debug: &quot; when `--debug` is used.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-warning/">WP_CLI::warning()</a></strong> - Display warning message prefixed with &quot;Warning: &quot;.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-error/">WP_CLI::error()</a></strong> - Display error message prefixed with &quot;Error: &quot; and exit script.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-halt/">WP_CLI::halt()</a></strong> - Halt script execution with a specific return code.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-error-multi-line/">WP_CLI::error_multi_line()</a></strong> - Display a multi-line error message in a red box. Doesn't exit script.</li>


</ul>


## Input

<ul>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-parse-str-to-argv/">WP_CLI\Utils\parse_str_to_argv()</a></strong> - Parse a string of command line arguments into an $argv-esqe variable.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-report-batch-operation-results/">WP_CLI\Utils\report_batch_operation_results()</a></strong> - Report the results of the same operation against multiple resources.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-flag-value/">WP_CLI\Utils\get_flag_value()</a></strong> - Return the flag value or, if it's not set, the $default value.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-launch-editor-for-input/">WP_CLI\Utils\launch_editor_for_input()</a></strong> - Launch system's $EDITOR for the user to edit some text.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-confirm/">WP_CLI::confirm()</a></strong> - Ask for confirmation before running a destructive operation.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-read-value/">WP_CLI::read_value()</a></strong> - Read a value, from various formats.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-get-config/">WP_CLI::get_config()</a></strong> - Get values of global configuration parameters.</li>


</ul>


## Execution

<ul>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-launch/">WP_CLI::launch()</a></strong> - Launch an arbitrary external process that takes over I/O.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-launch-self/">WP_CLI::launch_self()</a></strong> - Run a WP-CLI command in a new process reusing the current runtime arguments.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-runcommand/">WP_CLI::runcommand()</a></strong> - Run a WP-CLI command.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-run-command/">WP_CLI::run_command()</a></strong> - Run a given command within the current process using the same global parameters.</li>


</ul>


## System

<ul>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-php-binary/">WP_CLI\Utils\get_php_binary()</a></strong> - Get the path to the PHP binary used when executing WP-CLI.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-temp-dir/">WP_CLI\Utils\get_temp_dir()</a></strong> - Get the system's temp directory. Warns user if it isn't writable.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-normalize-path/">WP_CLI\Utils\normalize_path()</a></strong> - Normalize a filesystem path.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-trailingslashit/">WP_CLI\Utils\trailingslashit()</a></strong> - Appends a trailing slash.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-home-dir/">WP_CLI\Utils\get_home_dir()</a></strong> - Get the home directory.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-get-php-binary/">WP_CLI::get_php_binary()</a></strong> - Get the path to the PHP binary used when executing WP-CLI.</li>


</ul>


## Misc

<ul>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-esc-like/">WP_CLI\Utils\esc_like()</a></strong> - First half of escaping for LIKE special characters % and _ before preparing for MySQL.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-proc-open-compat/">WP_CLI\Utils\proc_open_compat()</a></strong> - Windows compatible `proc_open()`. Works around bug in PHP, and also deals with *nix-like `ENV_VAR=blah cmd` environment variable prefixes.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-ispiped/">WP_CLI\Utils\isPiped()</a></strong> - Checks whether the output of the current script is a TTY or a pipe / redirect</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-basename/">WP_CLI\Utils\basename()</a></strong> - Locale-independent version of basename()</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-parse-ssh-url/">WP_CLI\Utils\parse_ssh_url()</a></strong> - Parse a SSH url for its host, port, and path.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-get-named-sem-ver/">WP_CLI\Utils\get_named_sem_ver()</a></strong> - Compare two version strings to get the named semantic version.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-http-request/">WP_CLI\Utils\http_request()</a></strong> - Make a HTTP request to a remote URL.</li>


<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-write-csv/">WP_CLI\Utils\write_csv()</a></strong> - Write data as CSV to a given file.</li>


</ul>


