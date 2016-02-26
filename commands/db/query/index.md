---
layout: default
title: 'wp db query'
display_global_parameters: true
---

`wp db query` - Execute a query against the database.

<hr />

### OPTIONS

[&lt;sql&gt;]
: A SQL query. If not passed, will try to read from STDIN.

### EXAMPLES

    # execute a query stored in a file
    wp db query < debug.sql

    # check all tables in the database
    wp db query "CHECK TABLE $(wp db tables | paste -s -d',');"



