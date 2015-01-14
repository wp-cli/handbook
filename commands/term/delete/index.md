---
layout: default
title: 'wp term delete'
---

`wp term delete` - Delete a term.

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy of the term to delete.

&lt;term-id&gt;...
: One or more IDs of terms to delete.

### EXAMPLES

    # delete all post tags
    wp term list post_tag --field=term_id | xargs wp term delete post_tag

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



