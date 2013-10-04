---
layout: default
title: 'wp post update'
---

`wp post update` - Update one or more posts.

### OPTIONS

&lt;id&gt;...
: One or more IDs of posts to update.

\--&lt;field&gt;=&lt;value&gt;
: One or more fields to update. See wp_update_post().

### EXAMPLES

    wp post update 123 --post_name=something --post_status=draft

