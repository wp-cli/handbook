---
layout: default
title: 'wp post meta add'
---

`wp post meta add` - Add a meta field.

### OPTIONS

&lt;id&gt;
: The ID of the object.

&lt;key&gt;
: The name of the meta field to create.

[&lt;value&gt;]
: The value of the meta field. If ommited, the value is read from STDIN.

[\--format=&lt;format&gt;]
: The serialization format for the value. Default is plaintext.

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



