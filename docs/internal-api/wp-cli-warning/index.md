---
layout: default
title: WP_CLI::warning()
---

<a href="/docs/internal-api/">Internal API</a> &raquo; Output

## WP_CLI::warning()

    WP_CLI::warning( $message )

Display warning message prefixed with &quot;Warning: &quot;.

<div>
<strong>$message</strong> (string) Message to write to STDERR.<br />
<strong>@return</strong> (null) <br /></p>
</div>

Warning message is written to STDERR.


    # `wp plugin activate` skips activation when plugin is network active.
    $status = $this->get_status( $plugin->file );
    // Network-active is the highest level of activation status
    if ( 'active-network' === $status ) {
    	WP_CLI::warning( "Plugin '{$plugin->name}' is already network active." );
    	continue;
    }
    

