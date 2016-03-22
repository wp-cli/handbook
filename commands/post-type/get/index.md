---
layout: default
title: 'wp post-type get'
display_global_parameters: true
---

`wp post-type get` - Get a post type

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aget+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;post-type&gt;
: Post type slug

[\--field=&lt;field&gt;]
: Instead of returning the whole taxonomy, returns the value of a single field.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to all fields.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv, yaml. Default: table

### EXAMPLES

    wp post-type get page --format=json



