---
layout: default
title: 'wp post update'
---

`wp post update` - Update one or more posts.

### OPTIONS

&lt;ID&gt;
: The ID of the post to update.

--&lt;field&gt;=&lt;value&gt;
: One or more fields to update. See wp_update_post().

### EXAMPLES

    wp post update 123 --post_name=something --post_status=draft

