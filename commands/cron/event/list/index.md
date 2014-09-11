---
layout: default
title: 'wp cron event list'
---

`wp cron event list` - List scheduled cron events.

### OPTIONS

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv, ids. Default: table.

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

