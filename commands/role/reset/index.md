---
layout: default
title: 'wp role reset'
display_global_parameters: true
---

`wp role reset` - Reset any default role to default capabilities.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Areset+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;role-key&gt;...]
: The internal name of one or more roles to reset.

[\--all]
: If set, all default roles will be reset.

### EXAMPLES

    wp role reset administrator author contributor

    wp role reset --all



