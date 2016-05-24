---
layout: default
title: WP_CLI\Utils\http_request()
description: "Make a HTTP request to a remote URL."
---

<a href="/docs/">Docs</a> &raquo; <a href="/docs/internal-api/">Internal API</a> &raquo; Misc

## WP_CLI\Utils\http_request()

Make a HTTP request to a remote URL.

***

### Usage

    WP_CLI\Utils\http_request( $method, $url, $data = null, $headers = array(), $options = array() )

<div>
<strong>$method</strong> (string) HTTP method (GET, POST, DELETE, etc.)<br />
<strong>$url</strong> (string) URL to make the HTTP request to.<br />
<strong>$headers</strong> (array) Add specific headers to the request.<br />
<strong>$options</strong> (array) <br />
<strong>@return</strong> (object) <br /></p>
</div>


***

### Notes

Wraps the Requests HTTP library to ensure every request includes a cert.


    # `wp core download` verifies the hash for a downloaded WordPress archive
    
    $md5_response = Utils\http_request( 'GET', $download_url . '.md5' );
    if ( 20 != substr( $md5_response->status_code, 0, 2 ) ) {
         WP_CLI::error( "Couldn't access md5 hash for release (HTTP code {$response->status_code})" );
    }
    


*Internal API documentation is generated from the WP-CLI codebase on every release. To suggest improvements, please submit a pull request.*


***

### Related

<ul>



<li><strong><a href="/docs/internal-api/wp-cli-utils-write-csv/">WP_CLI\Utils\write_csv()</a></strong> - Write data as CSV to a given file.</li>


<li><strong><a href="/docs/internal-api/wp-cli-utils-get-named-sem-ver/">WP_CLI\Utils\get_named_sem_ver()</a></strong> - Compare two version strings to get the named semantic version.</li>



</ul>


