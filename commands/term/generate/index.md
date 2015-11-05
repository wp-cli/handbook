---
layout: default
title: 'wp term generate'
---

`wp term generate` - Generate some terms.

<hr />

### OPTIONS

&lt;taxonomy&gt;
: The taxonomy for the generated terms.

[\--count=&lt;number&gt;]
: How many terms to generate. Default: 100

[\--max_depth=&lt;number&gt;]
: Generate child terms down to a certain depth. Default: 1

### EXAMPLES

    wp term generate --count=10

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



