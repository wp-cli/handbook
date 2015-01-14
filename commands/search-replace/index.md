---
layout: default
title: 'wp search-replace'
---

`wp search-replace` - Search/replace strings in the database.

### DESCRIPTION

This command will go through all rows in all tables and will replace all
appearances of the old string with the new one.

It will correctly handle serialized values, and will not change primary key values.

### OPTIONS

&lt;old&gt;
: The old string.

&lt;new&gt;
: The new string.

[&lt;table&gt;...]
: List of database tables to restrict the replacement to.

[\--network]
: Search/replace through all the tables in a multisite install.

[\--skip-columns=&lt;columns&gt;]
: Do not perform the replacement in the comma-separated columns.

[\--dry-run]
: Show report, but don't perform the changes.

[\--precise]
: Force the use of PHP (instead of SQL) which is more thorough, but slower. Use if you see issues with serialized data.

[\--recurse-objects]
: Enable recursing into objects to replace strings

### EXAMPLES

    wp search-replace 'http://example.dev' 'http://example.com' --skip-columns=guid

    wp search-replace 'foo' 'bar' wp_posts wp_postmeta wp_terms --dry-run

    # Turn your production database into a local database
    wp search-replace --url=example.com example.com example.dev

### GLOBAL PARAMETERS

  --path=&lt;path&gt;
      Path to the WordPress files

  --url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  --user=&lt;id|login|email&gt;
      Set the WordPress user

  --skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins

  --skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes

  --require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once)

  --[no-]color
      Whether to colorize the output

  --debug
      Show all PHP errors

  --prompt
      Prompt the user to enter values for all command arguments

  --quiet
      Suppress informational messages



