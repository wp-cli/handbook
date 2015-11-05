---
layout: default
title: 'wp user meta list'
---

`wp user meta list` - List all metadata associated with an object.

<hr />

&lt;id&gt;
: ID for the object.

[\--keys=&lt;keys&gt;]
: Limit output to metadata of specific keys.

[\--fields=&lt;fields&gt;]
: Limit the output to specific row fields. Defaults to id,meta_key,meta_value.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

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
      Show all PHP errors; add verbosity to WP-CLI bootstrap

  \--prompt
      Prompt the user to enter values for all command arguments

  \--quiet
      Suppress informational messages



