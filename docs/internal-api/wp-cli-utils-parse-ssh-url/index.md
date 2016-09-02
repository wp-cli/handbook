---
layout: default
title: WP_CLI\Utils\parse_ssh_url()
description: "Parse a SSH url for its host, port, and path."
---

<small><a href="/docs/">Docs</a> &raquo; <a href="/docs/internal-api/">Internal API</a> &raquo; Misc</small>

## WP_CLI\Utils\parse_ssh_url()

Parse a SSH url for its host, port, and path.

***

### Usage

    WP_CLI\Utils\parse_ssh_url( $url, $component = -1 )

<div>
<strong>@return</strong> (mixed) <br />
</div>


***

### Notes

Similar to parse_url(), but adds support for defined SSH aliases.


    host OR host/path/to/wordpress OR host:port/path/to/wordpress
    


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-utils-write-csv/">WP_CLI\Utils\write_csv()</a></strong> - Write data as CSV to a given file.</li>


<li><strong><a href="/docs/internal-api/wp-cli-utils-http-request/">WP_CLI\Utils\http_request()</a></strong> - Make a HTTP request to a remote URL.</li>


<li><strong><a href="/docs/internal-api/wp-cli-utils-get-named-sem-ver/">WP_CLI\Utils\get_named_sem_ver()</a></strong> - Compare two version strings to get the named semantic version.</li>



</ul>


