---
layout: default
title: 'wp cron event list'
display_global_parameters: true
---

`wp cron event list` - List scheduled cron events.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acron-event-list+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv, ids, yaml. Default: table.

### AVAILABLE FIELDS

These fields will be displayed by default for each cron event:
* hook
* next_run_gmt
* next_run_relative
* recurrence

These fields are optionally available:
* time
* sig
* args
* schedule
* interval
* next_run

### EXAMPLES

    wp cron event list

    wp cron event list --fields=hook,next_run --format=json



