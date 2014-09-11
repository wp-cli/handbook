---
layout: default
title: 'wp widget list'
---

`wp widget list` - List widgets associated with a sidebar.

&lt;sidebar-id&gt;
: ID for the corresponding sidebar.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count, ids. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each widget:

* name
* id
* position
* options

There are no optionally available fields.

### EXAMPLES

    wp sidebar widget list &lt;sidebar-id&gt; --fields=name --format=csv

