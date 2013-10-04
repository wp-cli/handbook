---
layout: default
title: 'wp post get'
---

`wp post get` - Get a post's content by ID.

### OPTIONS

&lt;id&gt;
: The ID of the post to get.

[--field=&lt;field&gt;]
: Instead of returning the whole post, returns the value of a single field.

[--format=&lt;format&gt;]
: The format to use when printing the post, acceptable values:

  - **table**: Outputs all fields of the post as a table. Note that the
    post_content field is omitted so that the table is readable.

  - **json**: Outputs all fields in JSON format.

### EXAMPLES

    # save the post content to a file
    wp post get 12 --field=content &gt; file.txt

