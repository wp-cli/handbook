---
layout: default
title: 'wp term delete'
display_global_parameters: true
---

`wp term delete` - Delete a term.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aterm-delete+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy of the term to delete.

&lt;term-id&gt;...
: One or more IDs of terms to delete.

### EXAMPLES

    # Delete post category
    $ wp term delete category 15
    Success: Deleted category 15.

    # Delete all post tags
    $ wp term list post_tag --field=term_id | xargs wp term delete post_tag
    Success: Deleted post_tag 159.
    Success: Deleted post_tag 160.
    Success: Deleted post_tag 161.



