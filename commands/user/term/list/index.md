---
layout: default
title: 'wp user term list'
---

`wp user term list` - List all terms associated with an object.

<hr />

&lt;id&gt;
: ID for the object.

&lt;taxonomy&gt;...
: One or more taxonomies to list.

[\--fields=&lt;fields&gt;]
: Limit the output to specific row fields.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count, ids. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each term:

* term_id
* name
* slug
* taxonomy

These fields are optionally available:

* term_taxonomy_id
* description
* term_group
* parent
* count

### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once)

  \--[no-]color
      Whether to colorize the output

  \--debug
      Show all PHP errors

  \--prompt
      Prompt the user to enter values for all command arguments

  \--quiet
      Suppress informational messages



