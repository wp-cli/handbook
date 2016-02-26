---
layout: default
title: 'wp server'
display_global_parameters: true
---

`wp server` - Launch PHP's built-in web server for this specific WordPress installation.

<hr />

&lt;http://php.net/manual/en/features.commandline.webserver.php&gt;

### OPTIONS

[\--host=&lt;host&gt;]
: The hostname to bind the server to. Default: localhost

[\--port=&lt;port&gt;]
: The port number to bind the server to. Default: 8080

[\--docroot=&lt;path&gt;]
: The path to use as the document root.

### EXAMPLES

    # Make the instance available on any address (with port 8080)
    wp server --host=0.0.0.0

    # Run on port 80 (for multisite)
    sudo wp server --host=localhost.localdomain --port=80



