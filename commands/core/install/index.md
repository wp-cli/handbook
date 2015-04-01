---
layout: default
title: 'wp core install'
---

`wp core install` - Create the WordPress tables in the database.

### OPTIONS

\--url=&lt;url&gt;
: The address of the new site.

\--title=&lt;site-title&gt;
: The title of the new site.

\--admin_user=&lt;username&gt;
: The name of the admin user.

\--admin_password=&lt;password&gt;
: The password for the admin user.

\--admin_email=&lt;email&gt;
: The email address for the admin user.

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



