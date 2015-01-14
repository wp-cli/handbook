---
layout: default
title: 'wp post generate'
---

`wp post generate` - Generate some posts.

### OPTIONS

[\--count=&lt;number&gt;]
: How many posts to generate. Default: 100

[\--post_type=&lt;type&gt;]
: The type of the generated posts. Default: 'post'

[\--post_status=&lt;status&gt;]
: The status of the generated posts. Default: 'publish'

[\--post_author=&lt;login&gt;]
: The author of the generated posts. Default: none

[\--post_date=&lt;yyyy-mm-dd&gt;]
: The date of the generated posts. Default: current date

[\--post_content]
: If set, the command reads the post_content from STDIN.

[\--max_depth=&lt;number&gt;]
: For hierarchical post types, generate child posts down to a certain depth. Default: 1

### EXAMPLES

    wp post generate --count=10 --post_type=page --post_date=1999-01-04
    curl http://loripsum.net/api/5 | wp post generate --post_content --count=10

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



