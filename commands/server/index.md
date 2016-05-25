---
layout: default
title: 'wp server'
display_global_parameters: true
---

`wp server` - Launch PHP's built-in web server for this specific WordPress installation.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aserver+sort%3Aupdated-desc">Github issues</a></small>

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
    $ wp server --host=0.0.0.0
    PHP 5.6.9 Development Server started at Tue May 24 01:27:11 2016
    Listening on http://0.0.0.0:8080
    Document root is /
    Press Ctrl-C to quit.

    # Run on port 80 (for multisite)
    $ sudo wp server --host=localhost.localdomain --port=80
    PHP 5.6.9 Development Server started at Tue May 24 01:30:06 2016
    Listening on http://localhost1.localdomain1:8080
    Document root is /
    Press Ctrl-C to quit.



