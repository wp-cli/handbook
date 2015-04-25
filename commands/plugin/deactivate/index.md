---
layout: default
title: 'wp plugin deactivate'
---

`wp plugin deactivate` - Deactivate a plugin.

### OPTIONS

[&lt;plugin&gt;...]
: One or more plugins to deactivate.

[\--uninstall]
: Uninstall the plugin after deactivation.

[\--all]
: If set, all plugins will be deactivated.

[\--network]
: If set, the plugin will be deactivated for the entire multisite network.

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



