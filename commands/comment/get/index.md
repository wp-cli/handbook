---
layout: default
title: 'wp comment get'
---

`wp comment get` - Get a single comment.

### OPTIONS

&lt;id&gt;
: The comment to get.

[\--field=&lt;field&gt;]
: Instead of returning the whole comment, returns the value of a single field.

[\--format=&lt;format&gt;]
: Accepted values: table, json. Default: table

### EXAMPLES

    wp comment get 1 --field=content

