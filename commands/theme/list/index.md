---
layout: default
title: 'wp theme list'
display_global_parameters: true
---

`wp theme list` - Get a list of themes.

<hr />

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: Filter results based on the value of a field.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each theme.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Accepted values: table, json. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each theme:

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

    wp theme list --status=inactive --format=csv



