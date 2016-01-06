---
layout: default
title: 'wp option update'
---

`wp option update` - Update an option.

<hr />

### OPTIONS

&lt;key&gt;
: The name of the option to add.

[&lt;value&gt;]
: The new value. If ommited, the value is read from STDIN.

[\--autoload=&lt;autoload&gt;]
: Requires WP 4.2. Should this option be automatically loaded. Accepted values: yes, no. Default: yes

[\--format=&lt;format&gt;]
: The serialization format for the value. Default is plaintext.

### EXAMPLES

    # Update an option by reading from a file
    wp option update my_option < value.txt

    # Update one option on multiple sites using xargs
    wp site list --field=url | xargs -n1 -I {} sh -c 'wp --url={} option update &lt;key&gt; &lt;value&gt;'

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



