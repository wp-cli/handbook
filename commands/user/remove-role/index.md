---
layout: default
title: 'wp user remove-role'
---

`wp user remove-role` - Remove a user's role.

<hr />

### OPTIONS

&lt;user&gt;
: User ID, user email, or user login.

[&lt;role&gt;]
: A specific role to remove.

### EXAMPLES

    wp user remove-role bob
    wp user remove-role 12 editor

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



