---
layout: default
title: 'wp core update'
---

`wp core update` - Update WordPress.

### OPTIONS

[&lt;zip&gt;]
: Path to zip file to use, instead of downloading from wordpress.org.

[\--version=&lt;version&gt;]
: Update to this version, instead of to the latest version.

[\--force]
: Update even when installed WP version is greater than the requested version.

[\--locale=&lt;locale&gt;]
: Select which language you want to download.

### EXAMPLES

    wp core update

    wp core update --version=3.8 ../latest.zip

    wp core update --version=3.1 --force

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



