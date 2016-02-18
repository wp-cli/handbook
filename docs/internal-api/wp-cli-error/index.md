---
layout: default
title: WP_CLI::error()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Output

## WP_CLI::error()

Display error message prefixed with &quot;Error: &quot; and exits script.

### Usage

    WP_CLI::error( $message, $exit = true )

<div>
<strong>$message</strong> (string|WP_Error) Message to write to STDERR.<br />
<strong>$exit</strong> (boolean|integer) True defaults to exit(1).<br />
<strong>@return</strong> (null) <br /></p>
</div>


### Notes

Error message is written to STDERR. Defaults to halting
script execution with return code 1.


    # `wp cache flush` considers flush failure to be a fatal error.
    if ( false === wp_cache_flush() ) {
        WP_CLI::error( 'The object cache could not be flushed.' );
    }
    

