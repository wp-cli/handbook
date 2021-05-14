# wp plugin update

Updates one or more plugins.

### OPTIONS

[&lt;plugin&gt;...]
: One or more plugins to update.

[\--all]
: If set, all plugins that have updates will be updated.

[\--exclude=&lt;name&gt;]
: Comma separated list of plugin names that should be excluded from updating.

[\--minor]
: Only perform updates for minor releases (e.g. from 1.3 to 1.4 instead of 2.0)

[\--patch]
: Only perform updates for patch releases (e.g. from 1.3 to 1.3.3 instead of 1.4)

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - summary
\---

[\--version=&lt;version&gt;]
: If set, the plugin will be updated to the specified version.

[\--dry-run]
: Preview which plugins would be updated.

[\--insecure]
: Retry downloads without certificate validation if TLS handshake fails. Note: This makes the request vulnerable to a MITM attack.

### EXAMPLES

    $ wp plugin update bbpress --version=dev
    Installing bbPress (Development Version)
    Downloading install package from https://downloads.wordpress.org/plugin/bbpress.zip...
    Unpacking the package...
    Installing the plugin...
    Removing the old version of the plugin...
    Plugin updated successfully.
    Success: Updated 1 of 2 plugins.

    $ wp plugin update --all
    Enabling Maintenance mode...
    Downloading update from https://downloads.wordpress.org/plugin/akismet.3.1.11.zip...
    Unpacking the update...
    Installing the latest version...
    Removing the old version of the plugin...
    Plugin updated successfully.
    Downloading update from https://downloads.wordpress.org/plugin/nginx-champuru.3.2.0.zip...
    Unpacking the update...
    Installing the latest version...
    Removing the old version of the plugin...
    Plugin updated successfully.
    Disabling Maintenance mode...
    +------------------------+-------------+-------------+---------+
    | name                   | old_version | new_version | status  |
    +------------------------+-------------+-------------+---------+
    | akismet                | 3.1.3       | 3.1.11      | Updated |
    | nginx-cache-controller | 3.1.1       | 3.2.0       | Updated |
    +------------------------+-------------+-------------+---------+
    Success: Updated 2 of 2 plugins.

    $ wp plugin update --all --exclude=akismet
    Enabling Maintenance mode...
    Downloading update from https://downloads.wordpress.org/plugin/nginx-champuru.3.2.0.zip...
    Unpacking the update...
    Installing the latest version...
    Removing the old version of the plugin...
    Plugin updated successfully.
    Disabling Maintenance mode...
    +------------------------+-------------+-------------+---------+
    | name                   | old_version | new_version | status  |
    +------------------------+-------------+-------------+---------+
    | nginx-cache-controller | 3.1.1       | 3.2.0       | Updated |
    +------------------------+-------------+-------------+---------+

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
