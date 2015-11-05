---
layout: default
title: 'wp shell'
---

`wp shell` - Interactive PHP console.

<hr />

### DESCRIPTION

`wp shell` allows you to evaluate PHP statements and expressions interactively, from within a WordPress environment. This means that you have access to all the functions, classes and globals that you would have access to from inside a WordPress plugin, for example.

### OPTIONS

[\--basic]
: Start in fail-safe mode, even if Boris is available.

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
      Show all PHP errors; add verbosity to WP-CLI bootstrap

  \--prompt
      Prompt the user to enter values for all command arguments

  \--quiet
      Suppress informational messages



