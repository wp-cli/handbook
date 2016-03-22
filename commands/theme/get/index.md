---
layout: default
title: 'wp theme get'
display_global_parameters: true
---

`wp theme get` - Get a theme

<hr />

### OPTIONS

&lt;theme&gt;
: The theme to get.

[\--field=&lt;field&gt;]
: Instead of returning the whole theme, returns the value of a single field.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to all fields.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv, yaml. Default: table

### EXAMPLES

    wp theme get twentytwelve --format=json



