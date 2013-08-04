---
layout: default
title: 'wp user get'
---

`wp user get` - Get a single user.

### OPTIONS

&lt;user&gt;
: User ID or user login.

--format=&lt;format&gt;
: The format to use when printing the user; acceptable values:

    **table**: Outputs all fields of the user as a table.

    **json**: Outputs all fields in JSON format.

### EXAMPLES

    wp user get 12

    wp user get bob --format=json &gt; bob.json

