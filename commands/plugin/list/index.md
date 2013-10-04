---
layout: default
title: 'wp plugin list'
---

`wp plugin list` - Get a list of plugins.

### OPTIONS

[\--field=&lt;field&gt;]
: Prints the value of a single field for each plugin.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields. Defaults to name,status,update,version.

[\--format=&lt;format&gt;]
: Output list as table, CSV or JSON. Defaults to table.

### EXAMPLES

    wp plugin list --format=json

