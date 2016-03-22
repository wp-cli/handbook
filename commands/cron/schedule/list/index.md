---
layout: default
title: 'wp cron schedule list'
display_global_parameters: true
---

`wp cron schedule list` - List available cron schedules.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Alist+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv, ids, yaml. Default: table.

### AVAILABLE FIELDS

These fields will be displayed by default for each cron schedule:

* name
* display
* interval

There are no additional fields.

### EXAMPLES

    wp cron schedule list

    wp cron schedule list --fields=name --format=ids



