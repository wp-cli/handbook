---
layout: default
title: 'wp core config'
display_global_parameters: true
---

`wp core config` - Generate a wp-config.php file.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acore-config+sort%3Aupdated-desc">Github issues</a></small>

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



