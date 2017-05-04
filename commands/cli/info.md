# wp cli info

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acli-info+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

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


