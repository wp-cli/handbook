# wp config create

Generate a wp-config.php file.

Creates a new wp-config.php with database constants, and verifies that
the database constants are correct.

### OPTIONS

\--dbname=&lt;dbname&gt;
: Set the database name.

\--dbuser=&lt;dbuser&gt;
: Set the database user.

[\--dbpass=&lt;dbpass&gt;]
: Set the database user password.

[\--dbhost=&lt;dbhost&gt;]
: Set the database host.
\---
default: localhost
\---

[\--dbprefix=&lt;dbprefix&gt;]
: Set the database table prefix.
\---
default: wp_
\---

[\--dbcharset=&lt;dbcharset&gt;]
: Set the database charset.
\---
default: utf8
\---

[\--dbcollate=&lt;dbcollate&gt;]
: Set the database collation.
\---
default:
\---

[\--locale=&lt;locale&gt;]
: Set the WPLANG constant. Defaults to $wp_local_package variable.

[\--extra-php]
: If set, the command copies additional PHP code into wp-config.php from STDIN.

[\--skip-salts]
: If set, keys and salts won't be generated, but should instead be passed via `--extra-php`.

[\--skip-check]
: If set, the database connection is not checked.

[\--force]
: Overwrites existing files, if present.

### EXAMPLES

    # Standard wp-config.php file
    $ wp core config --dbname=testing --dbuser=wp --dbpass=securepswd --locale=ro_RO
    Success: Generated 'wp-config.php' file.

    # Enable WP_DEBUG and WP_DEBUG_LOG
    $ wp core config --dbname=testing --dbuser=wp --dbpass=securepswd --extra-php <<PHP
    $ define( 'WP_DEBUG', true );
    $ define( 'WP_DEBUG_LOG', true );
    $ PHP
    Success: Generated 'wp-config.php' file.

    # Avoid disclosing password to bash history by reading from password.txt
    # Using --prompt=dbpass will prompt for the 'dbpass' argument
    $ wp core config --dbname=testing --dbuser=wp --prompt=dbpass < password.txt
    Success: Generated 'wp-config.php' file.


