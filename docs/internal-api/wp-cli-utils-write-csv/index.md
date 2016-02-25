---
layout: default
title: WP_CLI\Utils\write_csv()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Misc

## WP_CLI\Utils\write_csv()

Write data as CSV to a given file.

***

### Usage

    WP_CLI\Utils\write_csv( $fd, $rows, $headers = array() )

<div>
<strong>$fd</strong> (resource) File descriptor<br />
<strong>$rows</strong> (array) Array of rows to output<br />
<strong>$headers</strong> (array) List of CSV columns (optional)<br />
</div>


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-utils-get-named-sem-ver/">WP_CLI\Utils\get_named_sem_ver()</a></strong> - Compare two version strings to get the named semantic version.</li>


<li><strong><a href="/docs/internal-api/wp-cli-utils-get-flag-value/">WP_CLI\Utils\get_flag_value()</a></strong> - Return the flag value or, if it's not set, the $default value.</li>


<li><strong><a href="/docs/internal-api/wp-cli-utils-get-temp-dir/">WP_CLI\Utils\get_temp_dir()</a></strong> - Get the temp directory, and let the user know if it isn't writable.</li>


<li><strong><a href="/docs/internal-api/wp-cli-error-multi-line/">WP_CLI::error_multi_line()</a></strong> - Display an error in the CLI and end with a newline.</li>



</ul>


