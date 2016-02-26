---
layout: default
title: 'wp post delete'
display_global_parameters: true
---

`wp post delete` - Delete a post by ID.

<hr />

### OPTIONS

&lt;id&gt;...
: One or more IDs of posts to delete.

[\--force]
: Skip the trash bin.

[\--defer-term-counting]
: Recalculate term count in batch, for a performance boost.

### EXAMPLES

    wp post delete 123 --force

    wp post delete $(wp post list --post_type='page' --format=ids)

    # delete all posts in the trash
    wp post delete $(wp post list --post_status=trash --format=ids)



