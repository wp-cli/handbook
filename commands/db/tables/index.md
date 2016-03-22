---
layout: default
title: 'wp db tables'
display_global_parameters: true
---

`wp db tables` - List the database tables.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Adb-tables+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Defaults to all tables registered to $wpdb.

### OPTIONS

[&lt;table&gt;...]
: List tables based on wildcard search, e.g. 'wp_*_options' or 'wp_post?'.

[\--scope=&lt;scope&gt;]
: Can be all, global, ms_global, blog, or old tables. Defaults to all.

[\--network]
: List all the tables in a multisite install. Overrides --scope=&lt;scope&gt;.

[\--all-tables-with-prefix]
: List all tables that match the table prefix even if not registered on $wpdb. Overrides --network.

[\--all-tables]
: List all tables in the database, regardless of the prefix, and even if not registered on $wpdb. Overrides --all-tables-with-prefix.

[\--format=&lt;format&gt;]
: Accepted values: list, csv. Default: list

### EXAMPLES

    # Export only tables for a single site
    wp db export --tables=$(wp db tables --url=sub.example.com --format=csv)

    # Export all tables matching prefix
    wp db export --tables=$(wp db tables --all-tables-with-prefix --format=csv)



