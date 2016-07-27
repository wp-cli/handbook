---
layout: default
title: 'wp user list-caps'
display_global_parameters: true
---

`wp user list-caps` - List all user's capabilities.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Auser-list-caps+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;user&gt;
: User ID, user email, or login.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: list
options:
  - list
  - table
  - csv
  - json
  - count
  - yaml
\---

### EXAMPLES

    $ wp user list-caps 21
    edit_product
    create_premium_item



