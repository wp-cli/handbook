---
layout: default
title: 'wp user create'
---

`wp user create` - Create a user.

<hr />

### OPTIONS

&lt;user-login&gt;
: The login of the user to create.

&lt;user-email&gt;
: The email address of the user to create.

[\--role=&lt;role&gt;]
: The role of the user to create. Default: default role

[\--user_pass=&lt;password&gt;]
: The user password. Default: randomly generated

[\--user_registered=&lt;yyyy-mm-dd&gt;]
: The date the user registered. Default: current date

[\--display_name=&lt;name&gt;]
: The display name.

[\--first_name=&lt;first_name&gt;]
: The user's first name.

[\--last_name=&lt;last_name&gt;]
: The user's last name.

[\--send-email]
: Send an email to the user with their new account details.

[\--porcelain]
: Output just the new user id.

### EXAMPLES

    wp user create bob bob@example.com --role=author

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



