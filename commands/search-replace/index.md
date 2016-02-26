---
layout: default
title: 'wp search-replace'
display_global_parameters: true
---

`wp search-replace` - Search/replace strings in the database.

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
supported, e.g. 'wp_*_options' or 'wp_post*'.

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

[\--skip-columns=&lt;columns&gt;]
: Do not perform the replacement on specific columns. Use commas to
specify multiple columns. 'guid' is skipped by default.

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

    wp search-replace 'http://example.dev' 'http://example.com' --skip-columns=guid

    wp search-replace 'foo' 'bar' wp_posts wp_postmeta wp_terms --dry-run

    # Turn your production database into a local database
    wp search-replace --url=example.com example.com example.dev wp_\*_options

    # Search/replace to a SQL file without transforming the database
    wp search-replace foo bar --export=database.sql



