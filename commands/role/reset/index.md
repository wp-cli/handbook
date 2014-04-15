---
layout: default
title: 'wp role reset'
---

`wp role reset` - Reset any default role to default capabilities.

### OPTIONS

[&lt;role-key&gt;...]
: The internal name of one or more roles to reset.

[\--all]
: If set, all default roles will be reset.

### EXAMPLES

    wp role reset administrator author contributor

    wp role reset --all

