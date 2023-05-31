# WP_CLI\Utils\make_progress_bar()

Create a progress bar to display percent completion of a given operation.

***

## Usage

    WP_CLI\Utils\make_progress_bar( $message, $count, $interval = 100 )

<div>
<strong>$message</strong> (string) Text to display before the progress bar.<br />
<strong>$count</strong> (integer) Total number of ticks to be performed.<br />
<strong>$interval</strong> (int) Optional. The interval in milliseconds between updates. Default 100.<br />
<strong>@return</strong> (\cli\progress\Bar|\WP_CLI\NoOp) <br />
</div>


***

## Notes

Progress bar is written to STDOUT, and disabled when command is piped. Progress
advances with `$progress->tick()`, and completes with `$progress->finish()`.
Process bar also indicates elapsed time and expected total time.

```
# `wp user generate` ticks progress bar each time a new user is created.
#
# $ wp user generate --count=500
# Generating users  22 % [=======>                             ] 0:05 / 0:23

$progress = \WP_CLI\Utils\make_progress_bar( 'Generating users', $count );
for ( $i = 0; $i < $count; $i++ ) {
    // uses wp_insert_user() to insert the user
    $progress->tick();
}
$progress->finish();
```


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



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


