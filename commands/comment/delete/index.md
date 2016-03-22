---
layout: default
title: 'wp comment delete'
display_global_parameters: true
---

`wp comment delete` - Delete a comment.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Adelete+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;id&gt;...
: One or more IDs of comments to delete.

[\--force]
: Skip the trash bin.

### EXAMPLES

    wp comment delete 1337 --force

    wp comment delete 1337 2341 --force



