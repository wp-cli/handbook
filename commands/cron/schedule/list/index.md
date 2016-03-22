---
layout: default
title: 'wp cron schedule list'
display_global_parameters: true
---

`wp cron schedule list` - List available cron schedules.

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



