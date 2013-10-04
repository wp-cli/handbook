---
layout: default
title: 'wp search-replace'
---

`wp search-replace` - Search/replace strings in the database.

### DESCRIPTION

This command will go through all rows in all tables and will replace all appearances of the old string with the new one.

It will correctly handle serialized values, and will not change primary key values.

### OPTIONS

&lt;old&gt;
: The old string.

&lt;new&gt;
: The new string.

[&lt;table&gt;...]
: List of database tables to restrict the replacement to.

[--network]
: Search/replace through all the tables in a multisite install.

[--skip-columns=&lt;columns&gt;]
: Do not perform the replacement in the comma-separated columns.

[--dry-run]
: Show report, but don't perform the changes.

### EXAMPLES

    wp search-replace 'http://example.dev' 'http://example.com' --skip-columns=guid

    wp search-replace 'foo' 'bar' wp_posts wp_postmeta wp_terms --dry-run

