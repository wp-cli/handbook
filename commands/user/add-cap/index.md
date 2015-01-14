---
layout: default
title: 'wp user add-cap'
---

`wp user add-cap` - Add a capability for a user.

### OPTIONS

&lt;user&gt;
: User ID, user email, or user login.

&lt;cap&gt;
: The capability to add.

### EXAMPLES

    wp user add-cap john create_premium_item
    wp user add-cap 15 edit_product

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



