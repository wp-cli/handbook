---
layout: default
title: 'wp rewrite structure'
---

`wp rewrite structure` - Update the permalink structure.

### OPTIONS

&lt;permastruct&gt;
: The new permalink structure to apply.

--category-base=&lt;categorybase&gt;
: Set the base for category permalinks, i.e. '/category/'.

--tag-base=&lt;tagbase&gt;
: Set the base for tag permalinks, i.e. '/tag/'.

### EXAMPLES

    wp rewrite structure '/%year%/%monthnum%/%postname%'

