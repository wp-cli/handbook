---
layout: default
title: 'wp db tables'
---

`wp db tables` - List the database tables.

### OPTIONS

[\--scope=&lt;scope&gt;]
: Can be all, global, ms_global, blog, or old tables. Defaults to all.

### EXAMPLES

    # Export only tables for a single site
    wp db export --tables=$(wp db tables --url=sub.example.com | tr '\n' ',')

