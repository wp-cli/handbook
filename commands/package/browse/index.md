---
layout: default
title: 'wp package browse'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [package](/commands/package/) &raquo; browse</small>

`wp package browse` - Browse WP-CLI packages available for installation.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Apackage-browse+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Lists packages available for installation from the [Package Index](http://wp-cli.org/package-index/).

### OPTIONS

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - ids
  - json
  - yaml
\---

### EXAMPLES

    $ wp package browse --format=yaml
    ---
    10up/mu-migration:
      name: 10up/mu-migration
      description: A set of WP-CLI commands to support the migration of single WordPress instances to multisite
      authors: Nícholas André
      version: dev-master, dev-develop
    aaemnnosttv/wp-cli-dotenv-command:
      name: aaemnnosttv/wp-cli-dotenv-command
      description: Dotenv commands for WP-CLI
      authors: Evan Mattson
      version: v0.1, v0.1-beta.1, v0.2, dev-master, dev-dev, dev-develop, dev-tests/behat
    aaemnnosttv/wp-cli-http-command:
      name: aaemnnosttv/wp-cli-http-command
      description: WP-CLI command for using the WordPress HTTP API
      authors: Evan Mattson
      version: dev-master



