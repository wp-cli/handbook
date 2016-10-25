---
layout: default
title: 'wp db import'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [db](/commands/db/) &raquo; import</small>

`wp db import` - Import a MySQL database from a file or from STDIN.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Adb-import+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Runs MySQL queries using `DB_HOST`, `DB_NAME`, `DB_USER` and
`DB_PASSWORD` database credentials specified in wp-config.php. This
does not create database by itself and only performs whatever tasks are
defined in the SQL.

### OPTIONS

[&lt;file&gt;]
: The name of the SQL file to import. If '-', then reads from STDIN. If omitted, it will look for '{dbname}.sql'.

### EXAMPLES

    # Import MySQL from a file.
    $ wp db import wordpress_dbase.sql
    Success: Imported from 'wordpress_dbase.sql'.



