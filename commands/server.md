# wp server

Launches PHP's built-in web server for a specific WordPress installation.

This command runs on the `before_wp_load` hook, just before the WP load process begins.

Uses `php -S` to launch a web server serving the WordPress webroot.
&lt;http://php.net/manual/en/features.commandline.webserver.php&gt;

Importantly, PHP's built-in web server doesn't support `.htaccess` files. If this is a requirement, please use a more advanced web server.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--host=&lt;host&gt;]
: The hostname to bind the server to.
\---
default: localhost
\---

[\--port=&lt;port&gt;]
: The port number to bind the server to.
\---
default: 8080
\---

[\--docroot=&lt;path&gt;]
: The path to use as the document root. If the path global parameter is set, the default value is it.

[\--config=&lt;file&gt;]
: Configure the server with a specific .ini file.

[\--adapt-scheme]
: Replace HTTPS URLs matching the original site URL with HTTP in server responses. Useful when the site is configured with HTTPS but the development server runs on HTTP.

[&lt;passthrough&gt;...]
: Optional arguments to pass to the PHP binary. Any arguments after `--` will be passed through to the `php` command.

### EXAMPLES

    # Make the instance available on any address (with port 8080)
    $ wp server --host=0.0.0.0
    PHP 5.6.9 Development Server started at Tue May 24 01:27:11 2016
    Listening on http://0.0.0.0:8080
    Document root is /
    Press Ctrl-C to quit.

    # Run on port 80 (for multisite)
    $ wp server --host=localhost.localdomain --port=80
    PHP 5.6.9 Development Server started at Tue May 24 01:30:06 2016
    Listening on http://localhost1.localdomain1:80
    Document root is /
    Press Ctrl-C to quit.

    # Configure the server with a specific .ini file
    $ wp server --config=development.ini
    PHP 7.0.9 Development Server started at Mon Aug 22 12:09:04 2016
    Listening on http://localhost:8080
    Document root is /
    Press Ctrl-C to quit.

    # Pass extra parameters to the PHP binary
    $ wp server --docroot=public -- -dzend_extension=xdebug.so
    PHP 7.4.0 Development Server started at Wed Nov 10 18:00:00 2025
    Listening on http://localhost:8080
    Document root is /var/www/public
    Press Ctrl-C to quit.

    # Adapt HTTPS links when the site is configured with HTTPS
    $ wp server --adapt-scheme
    PHP 8.0.0 Development Server started at Wed Nov 10 18:00:00 2025
    Listening on http://localhost:8080
    Document root is /var/www/html
    Press Ctrl-C to quit.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
| `--ssh-args=<args>` | Pass additional arguments to SSH (or other tools specified by --ssh scheme). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
| `--alias=<name>` | Name of the alias to use. Aliases can reference local WordPress installations or remote SSH connections. Aliases are defined in the wp-cli.yml file. |
| `--assume-https` | Set $_SERVER['HTTPS'] to make WordPress treat the site as HTTPS. Use when WordPress is behind an HTTPS proxy or load balancer. |
