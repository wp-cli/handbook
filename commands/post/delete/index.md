---
layout: default
title: 'wp post delete'
---

`wp post delete` - Delete a post by ID.

### OPTIONS

&lt;id&gt;...
: One or more IDs of posts to delete.

[\--force]
: Skip the trash bin.

### EXAMPLES

    wp post delete 123 --force

    wp post delete $(wp post list --post_type='page' --format=ids)

    # delete all posts in the trash
    wp post delete $(wp post list --post_status=trash --format=ids)

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



