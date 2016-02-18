---
layout: default
title: WP_CLI::error()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Output

## WP_CLI::error()

Display error message prefixed with &quot;Error: &quot; and exits script.

***

### Usage

    WP_CLI::error( $message, $exit = true )

<div>
<strong>$message</strong> (string|WP_Error) Message to write to STDERR.<br />
<strong>$exit</strong> (boolean|integer) True defaults to exit(1).<br />
<strong>@return</strong> (null) <br /></p>
</div>


***

### Notes

Error message is written to STDERR. Defaults to halting
script execution with return code 1.


    # `wp cache flush` considers flush failure to be a fatal error.
    if ( false === wp_cache_flush() ) {
        WP_CLI::error( 'The object cache could not be flushed.' );
    }
    



***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-utils-format-items/">WP_CLI\Utils\format_items()</a></strong> - Render a collection of items as an ASCII table, JSON, CSV, YAML, list of ids, or count.</li>


<li><strong><a href="/docs/internal-api/wp-cli-line/">WP_CLI::line()</a></strong> - Display a message in the CLI and end with a newline.</li>


<li><strong><a href="/docs/internal-api/wp-cli-log/">WP_CLI::log()</a></strong> - Log an informational message.</li>


<li><strong><a href="/docs/internal-api/wp-cli-success/">WP_CLI::success()</a></strong> - Display a success in the CLI and end with a newline.</li>


<li><strong><a href="/docs/internal-api/wp-cli-debug/">WP_CLI::debug()</a></strong> - Display debug message prefixed with &quot;Debug: &quot; when `--debug` is used.</li>


<li><strong><a href="/docs/internal-api/wp-cli-warning/">WP_CLI::warning()</a></strong> - Display warning message prefixed with &quot;Warning: &quot;.</li>



</ul>


