---
layout: default
title: 'wp rewrite list'
display_global_parameters: true
---

`wp rewrite list` - Print current rewrite rules.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Alist+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--match=&lt;url&gt;]
: Show rewrite rules matching a particular URL.

[\--source=&lt;source&gt;]
: Show rewrite rules from a particular source.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to match,query,source.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count, yaml. Default: table

### EXAMPLES

    wp rewrite list --format=csv



