---
layout: default
title: 'wp search-replace'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; search-replace</small>

`wp search-replace` - Search/replace strings in the database.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asearch-replace+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### DESCRIPTION

This command will searches through all rows in a selection of tables
and replaces appearances of the first string with the second string.

By default, the command uses tables registered to the $wpdb object. On
multisite, this will just be the tables for the current site unless
\--network is specified.

Search/replace intelligently handles PHP serialized data, and does not
change primary key values.

### OPTIONS

&lt;old&gt;
: A string to search for within the database.

&lt;new&gt;
: Replace instances of the first string with this new string.

[&lt;table&gt;...]
: List of database tables to restrict the replacement to. Wildcards are
supported, e.g. `'wp_*_options'` or `'wp_post*'`.

[\--dry-run]
: Run the entire search/replace operation and show report, but don't save
changes to the database.

[\--network]
: Search/replace through all the tables registered to $wpdb in a
multisite install.

[\--all-tables-with-prefix]
: Enable replacement on any tables that match the table prefix even if
not registered on $wpdb.

[\--all-tables]
: Enable replacement on ALL tables in the database, regardless of the
prefix, and even if not registered on $wpdb. Overrides --network
and --all-tables-with-prefix.

[\--export[=&lt;file&gt;]]
: Write transformed data as SQL file instead of saving replacements to
the database. If &lt;file&gt; is not supplied, will output to STDOUT.

[\--export_insert_size=&lt;rows&gt;]
: Define number of rows in single INSERT statement when doing SQL export.
You might want to change this depending on your database configuration
(e.g. if you need to do fewer queries). Default: 50

[\--skip-columns=&lt;columns&gt;]
: Do not perform the replacement on specific columns. Use commas to
specify multiple columns. 'guid' is skipped by default.

[\--include-columns=&lt;columns&gt;]
: Perform the replacement on specific columns. Use commas to
specify multiple columns.

[\--precise]
: Force the use of PHP (instead of SQL) which is more thorough,
but slower.

[\--recurse-objects]
: Enable recursing into objects to replace strings. Defaults to true;
pass --no-recurse-objects to disable.

[\--verbose]
: Prints rows to the console as they're updated.

[\--regex]
: Runs the search using a regular expression. Warning: search-replace
will take about 15-20x longer when using --regex.

### EXAMPLES

    # Search and replace but skip one column
    $ wp search-replace 'http://example.dev' 'http://example.com' --skip-columns=guid

    # Run search/replace operation but dont save in database
    $ wp search-replace 'foo' 'bar' wp_posts wp_postmeta wp_terms --dry-run

    # Turn your production multisite database into a local dev database
    $ wp search-replace --url=example.com example.com example.dev 'wp_*_options' wp_blogs

    # Search/replace to a SQL file without transforming the database
    $ wp search-replace foo bar --export=database.sql

    # Bash script: Search/replace production to development url (multisite compatible)
    #!/bin/bash
    if $(wp --url=http://example.com core is-installed --network); then
        wp search-replace --url=http://example.com 'http://example.com' 'http://example.dev' --recurse-objects --network --skip-columns=guid
    else
        wp search-replace 'http://example.com' 'http://example.dev' --recurse-objects --skip-columns=guid
    fi



