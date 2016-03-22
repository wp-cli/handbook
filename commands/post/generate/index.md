---
layout: default
title: 'wp post generate'
display_global_parameters: true
---

`wp post generate` - Generate some posts.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Apost-generate+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--count=&lt;number&gt;]
: How many posts to generate. Default: 100

[\--post_type=&lt;type&gt;]
: The type of the generated posts. Default: 'post'

[\--post_status=&lt;status&gt;]
: The status of the generated posts. Default: 'publish'

[\--post_author=&lt;login&gt;]
: The author of the generated posts. Default: none

[\--post_date=&lt;yyyy-mm-dd&gt;]
: The date of the generated posts. Default: current date

[\--post_content]
: If set, the command reads the post_content from STDIN.

[\--max_depth=&lt;number&gt;]
: For hierarchical post types, generate child posts down to a certain depth. Default: 1

### EXAMPLES

    wp post generate --count=10 --post_type=page --post_date=1999-01-04
    curl http://loripsum.net/api/5 | wp post generate --post_content --count=10



