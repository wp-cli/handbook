---
layout: default
title: 'wp user get'
display_global_parameters: true
---

`wp user get` - Get a single user.

<hr />

### OPTIONS

&lt;user&gt;
: User ID, user email, or user login.

[\--field=&lt;field&gt;]
: Instead of returning the whole user, returns the value of a single field.

[\--fields=&lt;fields&gt;]
: Get a specific subset of the user's fields.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv. Default: table

### EXAMPLES

    wp user get 12 --field=login

    wp user get bob --format=json > bob.json



