---
layout: default
title: 'wp role create'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [role](/commands/role/) &raquo; create</small>

`wp role create` - Create a new role.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Arole-create+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;role-key&gt;
: The internal name of the role.

&lt;role-name&gt;
: The publicly visible name of the role.

[\--clone=&lt;role&gt;]
: Clone capabilities from an existing role.

### EXAMPLES

    # Create role for Approver.
    $ wp role create approver Approver
    Success: Role with key 'approver' created.

    # Create role for Product Administrator.
    $ wp role create productadmin "Product Administrator"
    Success: Role with key 'productadmin' created.



