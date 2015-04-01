---
layout: default
title: 'wp user get'
---

`wp user get` - Get a single user.

### OPTIONS

&lt;user&gt;
: User ID, user email, or user login.

[\--field=&lt;field&gt;]
: Instead of returning the whole user, returns the value of a single field.

[\--fields=&lt;fields&gt;]
: Get a specific subset of the user's fields.

[\--format=&lt;format&gt;]
: Accepted values: table, json, csv. Default: table

### EXAMPLES

    wp user get 12 --field=login

    wp user get bob --format=json > bob.json

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



