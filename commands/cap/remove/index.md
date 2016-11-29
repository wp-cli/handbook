---
layout: default
title: 'wp cap remove'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [cap](/commands/cap/) &raquo; remove</small>

`wp cap remove` - Remove capabilities from a given role.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acap-remove+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;role&gt;
: Key for the role.

&lt;cap&gt;...
: One or more capabilities to remove.

### EXAMPLES

    # Remove 'spectate' capability from 'author' role.
    $ wp cap remove author spectate
    Success: Removed 1 capability from 'author' role.



