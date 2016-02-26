---
layout: default
title: 'wp taxonomy list'
display_global_parameters: true
---

`wp taxonomy list` - List taxonomies.

<hr />

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: Filter by one or more fields (see get_taxonomies() first parameter for a list of available fields).

[\--field=&lt;field&gt;]
: Prints the value of a single field for each taxonomy.

[\--fields=&lt;fields&gt;]
: Limit the output to specific taxonomy fields.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each term:

* name
* label
* description
* public
* hierarchical

There are no optionally available fields.

### EXAMPLES

    wp taxonomy list --format=csv

    wp taxonomy list --object-type=post --fields=name,public



