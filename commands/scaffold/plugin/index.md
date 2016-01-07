---
layout: default
title: 'wp scaffold plugin'
---

`wp scaffold plugin` - Generate starter code for a plugin.

<hr />

### OPTIONS

&lt;slug&gt;
: The internal name of the plugin.

[\--dir=&lt;dirname&gt;]
: Put the new plugin in some arbitrary directory path. Plugin directory will be path plus supplied slug.

[\--plugin_name=&lt;title&gt;]
: What to put in the 'Plugin Name:' header

[\--plugin_description=&lt;description&gt;]
: What to put in the 'Description:' header.

[\--plugin_author=&lt;author&gt;]
: What to put in the 'Author:' header.

[\--plugin_author_uri=&lt;url&gt;]
: What to put in the 'Author URI:' header.

[\--plugin_uri=&lt;url&gt;]
: What to put in the 'Plugin URI:' header.

[\--skip-tests]
: Don't generate files for unit testing.

[\--activate]
: Activate the newly generated plugin.

[\--activate-network]
: Network activate the newly generated plugin.

[\--force]
: Overwrite files that already exist.

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



