---
layout: default
title: 'wp cache add'
---

`wp cache add` - Add a value to the object cache.

<hr />

If a value already exists for the key, the value isn't added.

&lt;key&gt;
: Cache key.

&lt;value&gt;
: Value to add to the key.

[&lt;group&gt;]
: Method for grouping data within the cache which allows the same key to be used across groups.

[&lt;expiration&gt;]
: Define how long to keep the value, in seconds. Defaults to 0 (as long as possible).

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



