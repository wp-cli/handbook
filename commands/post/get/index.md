---
layout: default
title: 'wp post get'
display_global_parameters: true
---

`wp post get` - Get a post's content by ID.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aget+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;id&gt;
: The ID of the post to get.

[\--field=&lt;field&gt;]
: Instead of returning the whole post, returns the value of a single field.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to all fields.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv, yaml. Default: table

### EXAMPLES

    # save the post content to a file
    wp post get 12 --field=content > file.txt



