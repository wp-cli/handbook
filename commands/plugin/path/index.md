---
layout: default
title: 'wp plugin path'
---

`wp plugin path` - Get the path to a plugin or to the plugin directory.

<hr />

### OPTIONS

[&lt;plugin&gt;]
: The plugin to get the path to. If not set, will return the path to the
plugins directory.

[\--dir]
: If set, get the path to the closest parent directory, instead of the
plugin file.

### EXAMPLES

    cd $(wp plugin path)

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



