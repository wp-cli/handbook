---
layout: default
title: 'wp user set-role'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [user](/commands/user/) &raquo; set-role</small>

`wp user set-role` - Set the user role.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Auser-set-role+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;user&gt;
: User ID, user email, or user login.

[&lt;role&gt;]
: Make the user have the specified role. If not passed, the default role is
used.

### EXAMPLES

    $ wp user set-role 12 author
    Success: Added johndoe (12) to http://example.com as author.



