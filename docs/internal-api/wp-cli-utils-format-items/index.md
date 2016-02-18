---
layout: default
title: WP_CLI\Utils\format_items()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Output

## WP_CLI\Utils\format_items()

Render a collection of items as an ASCII table, JSON, CSV, YAML, list of ids, or count.

***

### Usage

    WP_CLI\Utils\format_items( $format, $items, $fields )

<div>
<strong>$format</strong> (string) Format to use: 'table', 'json', 'csv', 'yaml', 'ids', 'count'<br />
<strong>$items</strong> (array) Data to output<br />
<strong>$fields</strong> (array|string) Named fields for each item of data. Can be array or comma-separated list<br />
<strong>@return</strong> (null) <br /></p>
</div>



***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-line/">WP_CLI::line()</a></strong> - Display a message in the CLI and end with a newline.</li>


<li><strong><a href="/docs/internal-api/wp-cli-log/">WP_CLI::log()</a></strong> - Log an informational message.</li>


<li><strong><a href="/docs/internal-api/wp-cli-success/">WP_CLI::success()</a></strong> - Display a success in the CLI and end with a newline.</li>


<li><strong><a href="/docs/internal-api/wp-cli-debug/">WP_CLI::debug()</a></strong> - Display debug message prefixed with &quot;Debug: &quot; when `--debug` is used.</li>


<li><strong><a href="/docs/internal-api/wp-cli-warning/">WP_CLI::warning()</a></strong> - Display warning message prefixed with &quot;Warning: &quot;.</li>


<li><strong><a href="/docs/internal-api/wp-cli-error/">WP_CLI::error()</a></strong> - Display error message prefixed with &quot;Error: &quot; and exits script.</li>



</ul>


