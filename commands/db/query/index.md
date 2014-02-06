---
layout: default
title: 'wp db query'
---

`wp db query` - Execute a query against the database.

### OPTIONS

[&lt;sql&gt;]
: A SQL query. If not passed, will try to read from STDIN.

### EXAMPLES

    # execute a query stored in a file
    wp db query < debug.sql

