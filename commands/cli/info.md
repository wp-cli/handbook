# wp cli info

Print various details about the WP-CLI environment.

Helpful for diagnostic purposes, this command shares:

* PHP binary used.
* PHP binary version.
* php.ini configuration file used (which is typically different than web).
* WP-CLI root dir: where WP-CLI is installed (if non-Phar install).
* WP-CLI global config: where the global config YAML file is located.
* WP-CLI project config: where the project config YAML file is located.
* WP-CLI version: currently installed version.

See [config docs](https://wp-cli.org/config/) for more details on global and project config YAML files.

### OPTIONS

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: list
options:
  - list
  - json
\---

### EXAMPLES

    # Display various data about the CLI environment.
    $ wp cli info
    PHP binary: /usr/bin/php5
    PHP version:    5.5.9-1ubuntu4.16
    php.ini used:   /etc/php5/cli/php.ini
    WP-CLI root dir:    phar://wp-cli.phar
    WP-CLI packages dir:    /home/person/.wp-cli/packages/
    WP-CLI global config:
    WP-CLI project config:
    WP-CLI version: 0.24.1

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker" or "docker-compose"). |
| `--http=<http>` | Perform operation against a remote WordPress install over HTTP. |
| `--user=<id|login|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors; add verbosity to WP-CLI bootstrap. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
