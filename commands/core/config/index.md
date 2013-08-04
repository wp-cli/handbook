---
layout: default
title: 'wp core config'
---

`wp core config` - Set up a wp-config.php file.

### OPTIONS

--dbname=&lt;dbname&gt;
: Set the database name.

--dbuser=&lt;dbuser&gt;
: Set the database user.

--dbpass=&lt;dbpass&gt;
: Set the database user password.

--dbhost=&lt;dbhost&gt;
: Set the database host. Default: 'localhost'

--dbprefix=&lt;dbprefix&gt;
: Set the database table prefix. Default: 'wp_'

--locale=&lt;locale&gt;
: Set the WPLANG constant. Defaults to $wp_local_package variable.

--extra-php
: If set, the command reads additional PHP code from STDIN.

### EXAMPLES

    # Standard wp-config.php file
    wp core config --dbname=testing --dbuser=wp --dbpass=securepswd --locale=ro_RO

    # Enable WP_DEBUG and WP_DEBUG_LOG
    wp core config --dbname=testing --dbuser=wp --dbpass=securepswd --extra-php &lt;&lt;PHP
    define( 'WP_DEBUG', true );
    define( 'WP_DEBUG_LOG', true );
    PHP

