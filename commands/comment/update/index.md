---
layout: default
title: 'wp comment update'
---

`wp comment update` - Update one or more comments.

### OPTIONS

&lt;id&gt;...
: One or more IDs of comments to update.

\--&lt;field&gt;=&lt;value&gt;
: One or more fields to update. See wp_update_comment().

### EXAMPLES

    wp comment update 123 --comment_author='That Guy'

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



