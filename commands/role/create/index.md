---
layout: default
title: 'wp role create'
display_global_parameters: true
---

`wp role create` - Create a new role.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acreate+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;role-key&gt;
: The internal name of the role.

&lt;role-name&gt;
: The publicly visible name of the role.

[\--clone=&lt;role&gt;]
: Clone capabilities from an existing role.

### EXAMPLES

    wp role create approver Approver

    wp role create productadmin "Product Administrator"



