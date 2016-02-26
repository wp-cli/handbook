---
layout: default
title: 'wp rewrite list'
display_global_parameters: true
---

`wp rewrite list` - Print current rewrite rules.

<hr />

### OPTIONS

[\--match=&lt;url&gt;]
: Show rewrite rules matching a particular URL.

[\--source=&lt;source&gt;]
: Show rewrite rules from a particular source.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to match,query,source.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

### EXAMPLES

    wp rewrite list --format=csv



