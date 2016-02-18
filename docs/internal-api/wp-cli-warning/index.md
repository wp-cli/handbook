---
layout: default
title: WP_CLI::warning()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Output

## WP_CLI::warning()

Display warning message prefixed with &quot;Warning: &quot;.

### Usage

    WP_CLI::warning( $message )

<div>
<strong>$message</strong> (string) Message to write to STDERR.<br />
<strong>@return</strong> (null) <br /></p>
</div>


### Notes

Warning message is written to STDERR.


    # `wp plugin activate` skips activation when plugin is network active.
    $status = $this-&gt;get_status( $plugin-&gt;file );
    // Network-active is the highest level of activation status
    if ( 'active-network' === $status ) {
    	WP_CLI::warning( &quot;Plugin '{$plugin-&gt;name}' is already network active.&quot; );
    	continue;
    }
    

