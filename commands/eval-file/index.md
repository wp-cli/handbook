---
layout: default
title: 'wp eval-file'
---

`wp eval-file` - Load and execute a PHP file.

<hr />

### OPTIONS

&lt;file&gt;
: The path to the PHP file to execute.

[&lt;arg&gt;...]
: One or more arguments to pass to the file. They are placed in the $args variable.

[\--skip-wordpress]
: Load and execute file without loading WordPress.

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



