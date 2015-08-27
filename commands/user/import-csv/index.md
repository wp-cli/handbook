---
layout: default
title: 'wp user import-csv'
---

`wp user import-csv` - Import users from a CSV file.

<hr />

### OPTIONS

&lt;file&gt;
: The local or remote CSV file of users to import.

[\--send-email]
: Send an email to new users with their account details.

[\--skip-update]
: Don't update users that already exist.

### EXAMPLES

    wp user import-csv /path/to/users.csv
    wp user import-csv http://example.com/users.csv

    Sample users.csv file:

    user_login,user_email,display_name,role
    bobjones,bobjones@example.com,Bob Jones,contributor
    newuser1,newuser1@example.com,New User,author
    existinguser,existinguser@example.com,Existing User,administrator

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



