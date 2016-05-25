---
layout: default
title: 'wp theme get'
display_global_parameters: true
---

`wp theme get` - Get a theme

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atheme-get+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;theme&gt;
: The theme to get.

[\--field=&lt;field&gt;]
: Instead of returning the whole theme, returns the value of a single field.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to all fields.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv, yaml. Default: table

### EXAMPLES

    $ wp theme get twentysixteen --fields=name,title,version
    +---------+----------------+
    | Field   | Value          |
    +---------+----------------+
    | name    | Twenty Sixteen |
    | title   | Twenty Sixteen |
    | version | 1.2            |
    +---------+----------------+



