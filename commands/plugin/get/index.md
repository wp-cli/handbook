---
layout: default
title: 'wp plugin get'
---

`wp plugin get` - Get a plugin.

### OPTIONS

&lt;plugin&gt;
: The plugin to get.

[--field=&lt;field&gt;]
: Instead of returning the whole plugin, returns the value of a single field.

[--format=&lt;format&gt;]
: Output list as table or JSON. Defaults to table.

### EXAMPLES

    wp plugin get bbpress --format=json

