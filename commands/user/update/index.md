---
layout: default
title: 'wp user update'
---

`wp user update` - Update a user.

### OPTIONS

&lt;user&gt;...
: The user login or ID of the user(s) to update.

--&lt;field&gt;=&lt;value&gt;
: One or more fields to update. For accepted fields, see wp_update_user().

### EXAMPLES

    wp user update 123 --user_login=mary --display_name=Mary

    wp user update mary --user_pass=marypass

