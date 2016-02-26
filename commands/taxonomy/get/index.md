---
layout: default
title: 'wp taxonomy get'
display_global_parameters: true
---

`wp taxonomy get` - Get a taxonomy

<hr />

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy slug

[\--field=&lt;field&gt;]
: Instead of returning the whole taxonomy, returns the value of a single field.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to all fields.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv. Default: table

### EXAMPLES

    wp taxonomy get post_tag --format=json



