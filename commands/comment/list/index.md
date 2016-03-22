---
layout: default
title: 'wp comment list'
display_global_parameters: true
---

`wp comment list` - Get a list of comments.

<hr />

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: One or more args to pass to WP_Comment_Query.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each comment.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count, yaml. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each comment:

* comment_ID
* comment_post_ID
* comment_date
* comment_approved
* comment_author
* comment_author_email

These fields are optionally available:

* comment_author_url
* comment_author_IP
* comment_date_gmt
* comment_content
* comment_karma
* comment_agent
* comment_type
* comment_parent
* user_id

### EXAMPLES

    wp comment list --field=ID

    wp comment list --post_id=2

    wp comment list --number=20 --status=approve



