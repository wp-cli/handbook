---
layout: default
title: 'wp comment get'
---

`wp comment get` - Get a single comment.

### OPTIONS

&lt;id&gt;
: The comment to get.

[\--field=&lt;field&gt;]
: Instead of returning the whole comment, returns the value of a single field.

[\--format=&lt;format&gt;]
: The format to use when printing the comment, acceptable values:

  - **table**: Outputs all fields of the comment as a table.
  - **json**: Outputs all fields in JSON format.

### EXAMPLES

    wp comment get 1 --field=content

