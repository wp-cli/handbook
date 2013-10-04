---
layout: default
title: 'wp user create'
---

`wp user create` - Create a user.

### OPTIONS

&lt;user-login&gt;
: The login of the user to create.

&lt;user-email&gt;
: The email address of the user to create.

[\--role=&lt;role&gt;]
: The role of the user to create. Default: default role

[\--user_pass=&lt;password&gt;]
: The user password. Default: randomly generated

[\--user_registered=&lt;yyyy-mm-dd&gt;]
: The date the user registered. Default: current date

[\--display_name=&lt;name&gt;]
: The display name.

[\--porcelain]
: Output just the new user id.

### EXAMPLES

    wp user create bob bob@example.com --role=author

