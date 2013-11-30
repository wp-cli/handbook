---
layout: default
title: 'wp theme list'
---

`wp theme list` - Get a list of themes.

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: Filter results based on the value of a field.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each theme.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields. Defaults to name,status,update,version.

[\--format=&lt;format&gt;]
: Accepted values: table, json. Default: table

### EXAMPLES

    wp theme list --status=inactive --format=csv

