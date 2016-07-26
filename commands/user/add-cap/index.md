---
layout: default
title: 'wp user add-cap'
display_global_parameters: true
---

`wp user add-cap` - Add a capability for a user.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Auser-add-cap+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;user&gt;
: User ID, user email, or user login.

&lt;cap&gt;
: The capability to add.

### EXAMPLES

    # Add a capability for a user
    $ wp user add-cap john create_premium_item
    Success: Added 'create_premium_item' capability for john (16).

    # Add a capability for a user
    $ wp user add-cap 15 edit_product
    Success: Added 'edit_product' capability for johndoe (15).



