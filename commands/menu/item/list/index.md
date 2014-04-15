---
layout: default
title: 'wp menu item list'
---

`wp menu item list` - Get a list of items associated with a menu

### OPTIONS

&lt;menu&gt;
: The name, slug, or term ID for the menu

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields. Defaults to db_id,type,title,link

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count, ids. Default: table

### EXAMPLES

    wp menu item list &lt;menu&gt;

