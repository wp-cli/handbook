---
layout: default
title: 'wp network meta delete'
---

`wp network meta delete` - Delete a meta field.

<hr />

&lt;id&gt;
: The ID of the object.

[&lt;key&gt;]
: The name of the meta field to delete.

[&lt;value&gt;]
: The value to delete. If omitted, all rows with key will deleted.

[\--all]
: Delete all meta for the object.

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



