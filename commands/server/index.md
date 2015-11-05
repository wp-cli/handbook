---
layout: default
title: 'wp server'
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

### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once)

  \--[no-]color
      Whether to colorize the output

  \--debug
      Show all PHP errors; add verbosity to WP-CLI bootstrap

  \--prompt
      Prompt the user to enter values for all command arguments

  \--quiet
      Suppress informational messages



