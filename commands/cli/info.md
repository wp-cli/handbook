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

See [config docs](https://wp-cli.org/config/) for more details on global
and project config YAML files.

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

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

