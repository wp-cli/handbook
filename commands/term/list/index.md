---
layout: default
title: 'wp term list'
---

`wp term list` - List terms in a taxonomy.

### OPTIONS

&lt;taxonomy&gt;
: List terms of a given taxonomy.

--fields=&lt;fields&gt;
: Limit the output to specific object fields. Defaults to all of the term object fields.

--format=&lt;format&gt;
: Output list as table, CSV, JSON, or simply IDs. Defaults to table.

### EXAMPLES

    wp term list category --format=csv

    wp term list post_tag --fields=name,slug

