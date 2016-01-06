---
layout: default
title: 'wp option list'
---

`wp option list` - List options.

<hr />

[\--search=&lt;pattern&gt;]
: Use wildcards ( * and ? ) to match option name.

[\--autoload=&lt;value&gt;]
: Match only autoload options when value is on, and only not-autoload option when off.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: The serialization format for the value. total_bytes displays the total size of matching options in bytes. Accepted values: table, json, csv, count, total_bytes. Default: table

### EXAMPLES

    # Get the total size of all autoload options
    wp option list --autoload=on --format=total_bytes

    # Find biggest transients
    wp option list --search="*_transient_*" --fields=option_name,size_bytes | sort -n -k 2 | tail

    # List all options begining with "i2f_"
    wp option list --search "i2f_*"

### AVAILABLE FIELDS

This field will be displayed by default for each matching option:

* option_name
* option_value

These fields are optionally available:

* autoload
* size_bytes

### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files.

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user.

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins.

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes.

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once).

  \--[no-]color
      Whether to colorize the output.

  \--debug
      Show all PHP errors; add verbosity to WP-CLI bootstrap.

  \--prompt
      Prompt the user to enter values for all command arguments.

  \--quiet
      Suppress informational messages.



