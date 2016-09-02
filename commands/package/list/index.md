---
layout: default
title: 'wp package list'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [package](/commands/package/) &raquo; list</small>

`wp package list` - List installed WP-CLI packages.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Apackage-list+sort%3Aupdated-desc">Github issues</a></small>

<hr />

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

    $ wp package list
    +-----------------------+------------------------------------------+---------+------------+
    | name                  | description                              | authors | version    |
    +-----------------------+------------------------------------------+---------+------------+
    | wp-cli/server-command | Start a development server for WordPress |         | dev-master |
    +-----------------------+------------------------------------------+---------+------------+



