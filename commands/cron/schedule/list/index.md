---
layout: default
title: 'wp cron schedule list'
---

`wp cron schedule list` - List available cron schedules.

### OPTIONS

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields. Available fields: name, display, interval.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv, ids. Default: table.

### EXAMPLES

    wp cron schedule list

    wp cron schedule list --fields=name --format=ids

