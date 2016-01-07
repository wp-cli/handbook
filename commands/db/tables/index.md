---
layout: default
title: 'wp db tables'
---

`wp db tables` - List the database tables.

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

### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files.

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user.

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins.

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes.

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once).

  \--[no-]color
      Whether to colorize the output.

  \--debug
      Show all PHP errors; add verbosity to WP-CLI bootstrap.

  \--prompt
      Prompt the user to enter values for all command arguments.

  \--quiet
      Suppress informational messages.



