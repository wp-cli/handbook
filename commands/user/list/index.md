---
layout: default
title: 'wp user list'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [user](/commands/user/) &raquo; list</small>

`wp user list` - List users.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Auser-list+sort%3Aupdated-desc">Github issues</a></small>

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
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - ids
  - json
  - count
  - yaml
\---

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
* url

### EXAMPLES

    # List user IDs
    $ wp user list --field=ID
    1

    # List users with administrator role
    $ wp user list --role=administrator --format=csv
    ID,user_login,display_name,user_email,user_registered,roles
    1,supervisor,supervisor,supervisor@gmail.com,"2016-06-03 04:37:00",administrator

    # List users with only given fields
    $ wp user list --fields=display_name,user_email --format=json
    [{"display_name":"supervisor","user_email":"supervisor@gmail.com"}]



