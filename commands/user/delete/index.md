---
layout: default
title: 'wp user delete'
display_global_parameters: true
---

`wp user delete` - Delete one or more users from the current site.

<hr />

### OPTIONS

&lt;user&gt;...
: The user login, user email, or user ID of the user(s) to delete.

[\--network]
: On multisite, delete the user from the entire network.

[\--reassign=&lt;user-id&gt;]
: User ID to reassign the posts to.

[\--yes]
: Answer yes to any confirmation prompts.

### EXAMPLES

    # Delete user 123 and reassign posts to user 567
    wp user delete 123 --reassign=567



