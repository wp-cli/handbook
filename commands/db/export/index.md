---
layout: default
title: 'wp db export'
---

`wp db export` - Exports the database to a file or to STDOUT.

### OPTIONS

[&lt;file&gt;]
: The name of the SQL file to export. If '-', then outputs to STDOUT. If omitted, it will be '{dbname}.sql'.

[\--&lt;field&gt;=&lt;value&gt;]
: Extra arguments to pass to mysqldump

### EXAMPLES

    wp db dump --add-drop-table

