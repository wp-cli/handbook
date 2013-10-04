---
layout: default
title: 'wp post delete'
---

`wp post delete` - Delete a post by ID.

### OPTIONS

&lt;id&gt;...
: One or more IDs of posts to delete.

[\--force]
: Skip the trash bin.

### EXAMPLES

    wp post delete 123 --force

    wp post delete $(wp post list --post_type='page' --format=ids)

