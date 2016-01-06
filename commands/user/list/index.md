---
layout: default
title: 'wp user list'
---

`wp user list` - List users.

<hr />

### OPTIONS

[\--role=&lt;role&gt;]
: Only display users with a certain role.

[\--&lt;field&gt;=&lt;value&gt;]
: Control output by one or more arguments of get_users().

[\--network]
: List all users in the network for multisite.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each user.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each user:

* ID
* user_login
* display_name
* user_email
* user_registered
* roles

These fields are optionally available:

* user_pass
* user_nicename
* user_url
* user_activation_key
* user_status
* spam
* deleted
* caps
* cap_key
* allcaps
* filter

### EXAMPLES

    wp user list --field=ID

    wp user list --role=administrator --format=csv

    wp user list --fields=display_name,user_email --format=json

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



