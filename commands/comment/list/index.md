---
layout: default
title: 'wp comment list'
---

`wp comment list` - Get a list of comments.

### OPTIONS

[--&lt;field&gt;=&lt;value&gt;]
: One or more args to pass to WP_Comment_Query.

[--field=&lt;field&gt;]
: Prints the value of a single field for each comment.

[--fields=&lt;fields&gt;]
: Limit the output to specific object fields. Defaults to comment_ID,comment_post_ID,comment_date,comment_approved,comment_author,comment_author_email

[--format=&lt;format&gt;]
: Output list as table, CSV, JSON, or simply IDs. Defaults to table.

### EXAMPLES

    wp comment list --field=ID

    wp comment list --post_id=2

    wp comment list --number=20 --comment_approved=1

