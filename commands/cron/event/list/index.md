---
layout: default
title: 'wp cron event list'
---

`wp cron event list` - List scheduled cron events.

### OPTIONS

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields. Available fields: hook, next_run, next_run_gmt, next_run_relative, recurrence.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv, ids. Default: table.

### EXAMPLES

    wp cron event list

    wp cron event list --fields=hook,next_run --format=json

