---
layout: default
title: 'wp db query'
display_global_parameters: true
---

`wp db query` - Execute a query against the database.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aquery+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;sql&gt;]
: A SQL query. If not passed, will try to read from STDIN.

### EXAMPLES

    # execute a query stored in a file
    wp db query < debug.sql

    # check all tables in the database
    wp db query "CHECK TABLE $(wp db tables | paste -s -d',');"



