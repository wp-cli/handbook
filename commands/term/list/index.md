---
layout: default
title: 'wp term list'
---

`wp term list` - List terms in a taxonomy.

### OPTIONS

&lt;taxonomy&gt;...
: List terms of one or more taxonomies

[\--&lt;field&gt;=&lt;value&gt;]
: Filter by one or more fields.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each term.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each term:

* term_id
* term_taxonomy_id
* name
* slug
* description
* parent
* count

There are no optionally available fields.

### EXAMPLES

    wp term list category --format=csv

    wp term list post_tag --fields=name,slug

