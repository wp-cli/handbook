---
layout: default
title: 'wp rewrite structure'
---

`wp rewrite structure` - Update the permalink structure.

### OPTIONS

&lt;permastruct&gt;
: The new permalink structure to apply.

[--category-base=&lt;base&gt;]
: Set the base for category permalinks, i.e. '/category/'.

[--tag-base=&lt;base&gt;]
: Set the base for tag permalinks, i.e. '/tag/'.

[--hard]
: Perform a hard flush - update `.htaccess` rules as well as rewrite rules in database.

### EXAMPLES

    wp rewrite structure '/%year%/%monthnum%/%postname%'

