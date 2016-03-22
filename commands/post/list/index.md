---
layout: default
title: 'wp post list'
display_global_parameters: true
---

`wp post list` - Get a list of posts.

<hr />

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: One or more args to pass to WP_Query.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each post.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count, ids, yaml. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each post:

* ID
* post_title
* post_name
* post_date
* post_status

These fields are optionally available:

* post_author
* post_date_gmt
* post_content
* post_excerpt
* comment_status
* ping_status
* post_password
* to_ping
* pinged
* post_modified
* post_modified_gmt
* post_content_filtered
* post_parent
* guid
* menu_order
* post_type
* post_mime_type
* comment_count
* filter
* url

### EXAMPLES

    wp post list --field=ID

    wp post list --post_type=post --posts_per_page=5 --format=json

    wp post list --post_type=page --fields=post_title,post_status

    wp post list --post_type=page,post --format=ids

    wp post list --post__in=1,3



