---
layout: default
title: 'wp widget add'
---

`wp widget add` - Add a widget to a sidebar.

&lt;name&gt;
: Widget name.

&lt;sidebar-id&gt;
: ID for the corresponding sidebar.

[&lt;position&gt;]
: Widget's current position within the sidebar. Defaults to last

[\--&lt;field&gt;=&lt;value&gt;]
: Widget option to add, with its new value

### EXAMPLES

    wp widget add calendar sidebar-1 2 --title="Calendar"

### GLOBAL PARAMETERS

  --path=&lt;path&gt;
      Path to the WordPress files

  --url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  --user=&lt;id|login|email&gt;
      Set the WordPress user

  --skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins

  --skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes

  --require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once)

  --[no-]color
      Whether to colorize the output

  --debug
      Show all PHP errors

  --prompt
      Prompt the user to enter values for all command arguments

  --quiet
      Suppress informational messages



