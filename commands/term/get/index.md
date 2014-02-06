---
layout: default
title: 'wp term get'
---

`wp term get` - Get a taxonomy term

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy of the term to get

&lt;term-id&gt;
: ID of the term to get

[\--field=&lt;field&gt;]
: Instead of returning the whole term, returns the value of a single field.

[\--format=&lt;format&gt;]
: Accepted values: table, json. Default: table

### EXAMPLES

    wp term get category 1 --format=json

