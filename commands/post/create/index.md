---
layout: default
title: 'wp post create'
---

`wp post create` - Create a post.

<hr />

### OPTIONS

[&lt;file&gt;]
: Read post content from &lt;file&gt;. If this value is present, the
    `--post_content` argument will be ignored.

  Passing `-` as the filename will cause post content to
  be read from STDIN.

[\--&lt;field&gt;=&lt;value&gt;]
: Associative args for the new post. See wp_insert_post().

[\--edit]
: Immediately open system's editor to write or edit post content.

  If content is read from a file, from STDIN, or from the `--post_content`
  argument, that text will be loaded into the editor.

[\--porcelain]
: Output just the new post id.

### EXAMPLES

    wp post create --post_type=page --post_title='A future post' --post_status=future --post_date='2020-12-01 07:00:00'

    wp post create ./post-content.txt --post_category=201,345 --post_title='Post from file'

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



