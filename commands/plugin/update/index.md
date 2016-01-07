---
layout: default
title: 'wp plugin update'
---

`wp plugin update` - Update one or more plugins.

<hr />

### OPTIONS

[&lt;plugin&gt;...]
: One or more plugins to update.

[\--all]
: If set, all plugins that have updates will be updated.

[\--format=&lt;format&gt;]
: Output summary as table or summary. Defaults to table.

[\--version=&lt;version&gt;]
: If set, the plugin will be updated to the specified version.

[\--dry-run]
: Preview which plugins would be updated.

### EXAMPLES

    wp plugin update bbpress --version=dev

    wp plugin update --all

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



