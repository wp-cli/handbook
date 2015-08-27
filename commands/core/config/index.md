---
layout: default
title: 'wp core config'
---

`wp core config` - Generate a wp-config.php file.

<hr />

### OPTIONS

\--dbname=&lt;dbname&gt;
: Set the database name.

\--dbuser=&lt;dbuser&gt;
: Set the database user.

[\--dbpass=&lt;dbpass&gt;]
: Set the database user password.

[\--dbhost=&lt;dbhost&gt;]
: Set the database host. Default: 'localhost'

[\--dbprefix=&lt;dbprefix&gt;]
: Set the database table prefix. Default: 'wp_'

[\--dbcharset=&lt;dbcharset&gt;]
: Set the database charset. Default: 'utf8'

[\--dbcollate=&lt;dbcollate&gt;]
: Set the database collation. Default: ''

[\--locale=&lt;locale&gt;]
: Set the WPLANG constant. Defaults to $wp_local_package variable.

[\--extra-php]
: If set, the command copies additional PHP code into wp-config.php from STDIN.

[\--skip-salts]
: If set, keys and salts won't be generated, but should instead be passed via `--extra-php`.

[\--skip-check]
: If set, the database connection is not checked.

### EXAMPLES

    # Standard wp-config.php file
    wp core config --dbname=testing --dbuser=wp --dbpass=securepswd --locale=ro_RO

    # Enable WP_DEBUG and WP_DEBUG_LOG
    wp core config --dbname=testing --dbuser=wp --dbpass=securepswd --extra-php <<PHP
    define( 'WP_DEBUG', true );
    define( 'WP_DEBUG_LOG', true );
    PHP

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



