---
layout: default
title: 'wp post update'
---

`wp post update` - Update one or more posts.

### OPTIONS

&lt;id&gt;...
: One or more IDs of posts to update.

[&lt;file&gt;]
: Read post content from &lt;file&gt;. If this value is present, the
    `--post_content` argument will be ignored.

  Passing `-` as the filename will cause post content to
  be read from STDIN.

\--&lt;field&gt;=&lt;value&gt;
: One or more fields to update. See wp_update_post().

### EXAMPLES

    wp post update 123 --post_name=something --post_status=draft

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



