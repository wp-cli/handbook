---
layout: default
title: 'wp widget update'
---

`wp widget update` - Update a given widget's options.

&lt;widget-id&gt;
: Unique ID for the widget

[\--&lt;field&gt;=&lt;value&gt;]
: Field to update, with its new value

### EXAMPLES

    wp widget update calendar-1 --title="Calendar"

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



