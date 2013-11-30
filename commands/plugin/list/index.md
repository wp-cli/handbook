---
layout: default
title: 'wp plugin list'
---

`wp plugin list` - Get a list of plugins.

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: Filter results based on the value of a field.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each plugin.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields. Defaults to name,status,update,version.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

### EXAMPLES

    wp plugin list --status=active --format=json

