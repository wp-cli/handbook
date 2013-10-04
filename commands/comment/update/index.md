---
layout: default
title: 'wp comment update'
---

`wp comment update` - Update one or more comments.

### OPTIONS

&lt;id&gt;...
: One or more IDs of comments to update.

\--&lt;field&gt;=&lt;value&gt;
: One or more fields to update. See wp_update_comment().

### EXAMPLES

    wp comment update 123 --comment_author='That Guy'

