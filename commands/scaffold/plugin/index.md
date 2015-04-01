---
layout: default
title: 'wp scaffold plugin'
---

`wp scaffold plugin` - Generate starter code for a plugin.

### OPTIONS

&lt;slug&gt;
: The internal name of the plugin.

[\--plugin_name=&lt;title&gt;]
: What to put in the 'Plugin Name:' header

[\--skip-tests]
: Don't generate files for unit testing.

[\--activate]
: Activate the newly generated plugin.

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



