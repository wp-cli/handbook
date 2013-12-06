---
layout: default
title: 'wp post get'
---

`wp post get` - Get a post's content by ID.

### OPTIONS

&lt;id&gt;
: The ID of the post to get.

[\--field=&lt;field&gt;]
: Instead of returning the whole post, returns the value of a single field.

[\--format=&lt;format&gt;]
: Accepted values: table, json. Default: table

### EXAMPLES

    # save the post content to a file
    wp post get 12 --field=content > file.txt

