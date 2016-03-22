---
layout: default
title: 'wp user list'
display_global_parameters: true
---

`wp user list` - List users.

<hr />

### OPTIONS

[\--role=&lt;role&gt;]
: Only display users with a certain role.

[\--&lt;field&gt;=&lt;value&gt;]
: Control output by one or more arguments of get_users().

[\--network]
: List all users in the network for multisite.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each user.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count, yaml. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each user:

* ID
* user_login
* display_name
* user_email
* user_registered
* roles

These fields are optionally available:

* user_pass
* user_nicename
* user_url
* user_activation_key
* user_status
* spam
* deleted
* caps
* cap_key
* allcaps
* filter

### EXAMPLES

    wp user list --field=ID

    wp user list --role=administrator --format=csv

    wp user list --fields=display_name,user_email --format=json



