---
layout: default
title: 'wp user create'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [user](/commands/user/) &raquo; create</small>

`wp user create` - Create a new user.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Auser-create+sort%3Aupdated-desc">Github issues</a></small>

<hr />

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

[\--first_name=&lt;first_name&gt;]
: The user's first name.

[\--last_name=&lt;last_name&gt;]
: The user's last name.

[\--send-email]
: Send an email to the user with their new account details.

[\--porcelain]
: Output just the new user id.

### EXAMPLES

    # Create user
    $ wp user create bob bob@example.com --role=author
    Success: Created user 3.
    Password: k9**&amp;I4vNH(&amp;



