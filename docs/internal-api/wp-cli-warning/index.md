---
layout: default
title: WP_CLI::warning()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Output

## WP_CLI::warning()

Display warning message prefixed with &quot;Warning: &quot;.

***

### Usage

    WP_CLI::warning( $message )

<div>
<strong>$message</strong> (string) Message to write to STDERR.<br />
<strong>@return</strong> (null) <br /></p>
</div>


***

### Notes

Warning message is written to STDERR.


    # `wp plugin activate` skips activation when plugin is network active.
    $status = $this->get_status( $plugin->file );
    // Network-active is the highest level of activation status
    if ( 'active-network' === $status ) {
    	WP_CLI::warning( "Plugin '{$plugin->name}' is already network active." );
    	continue;
    }
    



***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-utils-format-items/">WP_CLI\Utils\format_items()</a></strong> - Render a collection of items as an ASCII table, JSON, CSV, YAML, list of ids, or count.</li>


<li><strong><a href="/docs/internal-api/wp-cli-line/">WP_CLI::line()</a></strong> - Display a message in the CLI and end with a newline.</li>


<li><strong><a href="/docs/internal-api/wp-cli-log/">WP_CLI::log()</a></strong> - Log an informational message.</li>


<li><strong><a href="/docs/internal-api/wp-cli-success/">WP_CLI::success()</a></strong> - Display a success in the CLI and end with a newline.</li>


<li><strong><a href="/docs/internal-api/wp-cli-debug/">WP_CLI::debug()</a></strong> - Display debug message prefixed with &quot;Debug: &quot; when `--debug` is used.</li>


<li><strong><a href="/docs/internal-api/wp-cli-error/">WP_CLI::error()</a></strong> - Display error message prefixed with &quot;Error: &quot; and exits script.</li>



</ul>


