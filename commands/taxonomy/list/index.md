---
layout: default
title: 'wp taxonomy list'
---

`wp taxonomy list` - List taxonomies.

<hr />

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: Filter by one or more fields (see get_taxonomies() first parameter for a list of available fields).

[\--field=&lt;field&gt;]
: Prints the value of a single field for each taxonomy.

[\--fields=&lt;fields&gt;]
: Limit the output to specific taxonomy fields.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each term:

* name
* label
* description
* public
* hierarchical

There are no optionally available fields.

### EXAMPLES

    wp taxonomy list --format=csv

    wp taxonomy list --object-type=post --fields=name,public

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



