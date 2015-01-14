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

[\--tables=&lt;tables&gt;]
: The comma separated list of specific tables to export. Excluding this parameter will export all tables

### EXAMPLES

    wp db export --add-drop-table
    wp db export --tables=wp_options,wp_users

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



