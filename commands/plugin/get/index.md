---
layout: default
title: 'wp plugin get'
display_global_parameters: true
---

`wp plugin get` - Get a plugin.

<hr />

### OPTIONS

&lt;plugin&gt;
: The plugin to get.

[\--field=&lt;field&gt;]
: Instead of returning the whole plugin, returns the value of a single field.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to all fields.

[\--format=&lt;format&gt;]
: Output list as table, json, CSV. Defaults to table.

### EXAMPLES

    wp plugin get bbpress --format=json



