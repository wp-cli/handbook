---
layout: default
title: 'wp post delete'
---

`wp post delete` - Delete a post by ID.

### OPTIONS

&lt;ID&gt;
: The ID of the post to delete.

--force
: Skip the trash bin.

### EXAMPLES

    wp post delete 123 --force

    wp post delete $(wp post list --post_type='page' --format=ids)

