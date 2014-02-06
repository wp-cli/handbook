---
layout: default
title: 'wp term delete'
---

`wp term delete` - Delete a term.

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy of the term to delete.

&lt;term-id&gt;...
: One or more IDs of terms to delete.

### EXAMPLES

    # delete all post tags
    wp term list post_tag --field=ID | xargs wp term delete post_tag

