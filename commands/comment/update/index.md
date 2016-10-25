---
layout: default
title: 'wp comment update'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [comment](/commands/comment/) &raquo; update</small>

`wp comment update` - Update one or more comments.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acomment-update+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;id&gt;...
: One or more IDs of comments to update.

\--&lt;field&gt;=&lt;value&gt;
: One or more fields to update. See wp_update_comment().

### EXAMPLES

    # Update comment.
    $ wp comment update 123 --comment_author='That Guy'
    Success: Updated comment 123.



