---
layout: default
title: 'wp cli info'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [cli](/commands/cli/) &raquo; info</small>

`wp cli info` - Print various data about the CLI environment.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acli-info+sort%3Aupdated-desc">Github issues</a></small>

<hr />

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

    $ wp cli info
    PHP binary: /usr/bin/php5
    PHP version:    5.5.9-1ubuntu4.16
    php.ini used:   /etc/php5/cli/php.ini
    WP-CLI root dir:    phar://wp-cli.phar
    WP-CLI packages dir:    /home/person/.wp-cli/packages/
    WP-CLI global config:
    WP-CLI project config:
    WP-CLI version: 0.23.1



