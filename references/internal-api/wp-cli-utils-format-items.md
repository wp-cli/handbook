# WP_CLI\Utils\format_items()

Render a collection of items as an ASCII table, JSON, CSV, YAML, list of ids, or count.

***

## Usage

    WP_CLI\Utils\format_items( $format, $items, $fields )

<div>
<strong>$format</strong> (string) Format to use: 'table', 'json', 'csv', 'yaml', 'ids', 'count'.<br />
<strong>$items</strong> (array&lt;mixed&gt;) An array of items to output.<br />
<strong>$fields</strong> (array&lt;string&gt;|string) Named fields for each item of data. Can be array or comma-separated list.<br />
</div>


***

## Notes

Given a collection of items with a consistent data structure:

```
$items = array(
    array(
        'key'   => 'foo',
        'value'  => 'bar',
    )
);
```

Render `$items` as an ASCII table:

```
WP_CLI\Utils\format_items( 'table', $items, array( 'key', 'value' ) );

# +-----+-------+
# | key | value |
# +-----+-------+
# | foo | bar   |
# +-----+-------+
```

Or render `$items` as YAML:

```
WP_CLI\Utils\format_items( 'yaml', $items, array( 'key', 'value' ) );

# ---
# -
#   key: foo
#   value: bar
```


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

## Related

<ul>



<li><strong><a href="https://make.wordpress.org/cli/handbook/internal-api/wp-cli-utils-make-progress-bar/">WP_CLI\Utils\make_progress_bar()</a></strong> - Create a progress bar to display percent completion of a given operation.</li>


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


