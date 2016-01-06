---
layout: default
title: 'wp scaffold post-type'
---

`wp scaffold post-type` - Generate PHP code for registering a custom post type.

<hr />

### OPTIONS

&lt;slug&gt;
: The internal name of the post type.

[\--label=&lt;label&gt;]
: The text used to translate the update messages

[\--textdomain=&lt;textdomain&gt;]
: The textdomain to use for the labels.

[\--dashicon=&lt;dashicon&gt;]
: The dashicon to use in the menu.

[\--theme]
: Create a file in the active theme directory, instead of sending to
STDOUT. Specify a theme with `--theme=&lt;theme&gt;` to have the file placed in that theme.

[\--plugin=&lt;plugin&gt;]
: Create a file in the given plugin's directory, instead of sending to STDOUT.

[\--raw]
: Just generate the `register_post_type()` call and nothing else.

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



