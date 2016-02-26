---
layout: default
title: 'wp plugin list'
display_global_parameters: true
---

`wp plugin list` - Get a list of plugins.

<hr />

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: Filter results based on the value of a field.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each plugin.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each plugin:

* name
* status
* update
* version

These fields are optionally available:

* update_version
* update_package
* update_id
* title
* description

### EXAMPLES

    wp plugin list --status=active --format=json

    # List plugins on each site in a network
    wp site list --field=url | xargs -n 1 -I % wp plugin list --url=%



