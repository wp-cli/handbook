---
layout: default
title: 'wp role list'
display_global_parameters: true
---

`wp role list` - List all roles.

<hr />

### OPTIONS

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each role:

* name
* role

There are no optional fields.

### EXAMPLES

    wp role list --fields=role --format=csv



