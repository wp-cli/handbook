---
layout: default
title: 'wp sidebar list'
---

`wp sidebar list` - List registered sidebars.

### OPTIONS

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields. Defaults to name, id, description

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

### EXAMPLES

    wp sidebar list --fields=name,id --format=csv

