---
layout: default
title: 'wp core config'
---

`wp core config` - Generate a wp-config.php file.

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
: If set, the command reads additional PHP code from STDIN.

[\--skip-salts]
: If set, keys and salts won't be generated, but should instead be passed via `--extra-php`.

### EXAMPLES

    # Standard wp-config.php file
    wp core config --dbname=testing --dbuser=wp --dbpass=securepswd --locale=ro_RO

    # Enable WP_DEBUG and WP_DEBUG_LOG
    wp core config --dbname=testing --dbuser=wp --dbpass=securepswd --extra-php <<PHP
    define( 'WP_DEBUG', true );
    define( 'WP_DEBUG_LOG', true );
    PHP

