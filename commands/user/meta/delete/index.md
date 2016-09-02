---
layout: default
title: 'wp user meta delete'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [user](/commands/user/) &raquo; [meta](/commands/user/meta/) &raquo; delete</small>

`wp user meta delete` - Delete a meta field.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Auser-meta-delete+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;user&gt;
: The user login, user email, or user ID of the user to delete metadata from.

&lt;key&gt;
: The metadata key.

[&lt;value&gt;]
: The value to delete. If omitted, all rows with key will deleted.

### EXAMPLES

    # Delete user meta
    $ wp user meta delete 123 bio
    Success: Deleted custom field.



