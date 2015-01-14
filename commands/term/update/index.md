---
layout: default
title: 'wp term update'
---

`wp term update` - Update a term.

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy of the term to update.

&lt;term-id&gt;
: ID for the term to update.

[\--name=&lt;name&gt;]
: A new name for the term.

[\--slug=&lt;slug&gt;]
: A new slug for the term.

[\--description=&lt;description&gt;]
: A new description for the term.

[\--parent=&lt;term-id&gt;]
: A new parent for the term.

### EXAMPLES

    wp term update category 15 --name=Apple

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



