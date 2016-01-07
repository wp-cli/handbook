---
layout: default
title: 'wp cli update'
---

`wp cli update` - Fetch most recent update matching the requirements. Returns the available versions if there are updates, or empty if no update available.

<hr />

### OPTIONS

[\--patch]
: Only perform patch updates

[\--minor]
: Only perform minor updates

[\--major]
: Only perform major updates

[\--nightly]
: Update to the latest built version of the master branch. Potentially unstable.

[\--yes]
: Do not prompt for confirmation

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



