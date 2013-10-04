---
layout: default
title: 'wp comment create'
---

`wp comment create` - Insert a comment.

### OPTIONS

\--&lt;field&gt;=&lt;value&gt;
: Associative args for the new comment. See wp_insert_comment().

[\--porcelain]
: Output just the new comment id.

### EXAMPLES

    wp comment create --comment_post_ID=15 --comment_content=&quot;hello blog&quot; --comment_author=&quot;wp-cli&quot;

