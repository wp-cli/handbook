---
layout: default
title: 'wp db export'
display_global_parameters: true
---

`wp db export` - Exports the database to a file or to STDOUT.

<hr />

### OPTIONS

[&lt;file&gt;]
: The name of the SQL file to export. If '-', then outputs to STDOUT. If omitted, it will be '{dbname}.sql'.

[\--&lt;field&gt;=&lt;value&gt;]
: Extra arguments to pass to mysqldump

[\--tables=&lt;tables&gt;]
: The comma separated list of specific tables to export. Excluding this parameter will export all tables in the database.

### EXAMPLES

    wp db export --add-drop-table
    wp db export --tables=wp_options,wp_users

    # Export all tables matching a wildcard
    wp db export --tables=$(wp db tables 'wp_user*' --format=csv)

    # Export all tables matching prefix
    wp db export --tables=$(wp db tables --all-tables-with-prefix --format=csv)



