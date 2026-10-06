# wp plugin update

Updates one or more plugins.

**Alias:** `upgrade`

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

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

[\--auto-update-indicated]
: Only update plugins where the server response indicates an automatic update. Updates to the version indicated by the server, not necessarily the latest version. Cannot be used with `--version`, `--minor`, or `--patch`.

[\--include-vcs]
: Include plugins that are version-controlled with a VCS (e.g. git, svn, hg). Skipped by default.

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
