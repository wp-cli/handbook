---
layout: default
title: 'wp term get'
display_global_parameters: true
---

`wp term get` - Get a taxonomy term

<hr />

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy of the term to get

&lt;term-id&gt;
: ID of the term to get

[\--field=&lt;field&gt;]
: Instead of returning the whole term, returns the value of a single field.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to all fields.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv. Default: table

### EXAMPLES

    wp term get category 1 --format=json



