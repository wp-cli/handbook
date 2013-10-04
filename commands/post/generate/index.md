---
layout: default
title: 'wp post generate'
---

`wp post generate` - Generate some posts.

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

[\--max_depth=&lt;number&gt;]
: For hierarchical post types, generate child posts down to a certain depth. Default: 1

### EXAMPLES

    wp post generate --count=10 --post_type=page --post_date=1999-01-04

