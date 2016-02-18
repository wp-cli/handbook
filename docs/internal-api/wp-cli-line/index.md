---
layout: default
title: WP_CLI::line()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Output

## WP_CLI::line()

Display a message in the CLI and end with a newline.

***

### Usage

    WP_CLI::line( $message = '' )

<div>
<strong>$message</strong> (string) Message to display to the end user.<br />
<strong>@return</strong> (null) <br /></p>
</div>


***

### Notes

Ignores `--quiet` flag. To respect, use `WP_CLI::log()`



***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-utils-format-items/">WP_CLI\Utils\format_items()</a></strong> - Render a collection of items as an ASCII table, JSON, CSV, YAML, list of ids, or count.</li>


<li><strong><a href="/docs/internal-api/wp-cli-log/">WP_CLI::log()</a></strong> - Log an informational message.</li>


<li><strong><a href="/docs/internal-api/wp-cli-success/">WP_CLI::success()</a></strong> - Display a success in the CLI and end with a newline.</li>


<li><strong><a href="/docs/internal-api/wp-cli-debug/">WP_CLI::debug()</a></strong> - Display debug message prefixed with &quot;Debug: &quot; when `--debug` is used.</li>


<li><strong><a href="/docs/internal-api/wp-cli-warning/">WP_CLI::warning()</a></strong> - Display warning message prefixed with &quot;Warning: &quot;.</li>


<li><strong><a href="/docs/internal-api/wp-cli-error/">WP_CLI::error()</a></strong> - Display error message prefixed with &quot;Error: &quot; and exits script.</li>



</ul>


