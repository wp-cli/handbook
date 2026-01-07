# wp config create

Generates a wp-config.php file.

Creates a new wp-config.php with database constants, and verifies that the database constants are correct.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

\--dbname=<dbname>
: Set the database name.

\--dbuser=<dbuser>
: Set the database user.

[\--dbpass=<dbpass>]
: Set the database user password.

[\--dbhost=<dbhost>]
: Set the database host.
\---
default: localhost
\---

[\--dbprefix=<dbprefix>]
: Set the database table prefix.
\---
default: wp_
\---

[\--dbcharset=<dbcharset>]
: Set the database charset.
\---
default: utf8
\---

[\--dbcollate=<dbcollate>]
: Set the database collation.
\---
default:
\---

[\--locale=<locale>]
: Set the WPLANG constant. Defaults to $wp_local_package variable.

[\--extra-php]
: If set, the command copies additional PHP code into wp-config.php from STDIN.

[\--skip-salts]
: If set, keys and salts won't be generated, but should instead be passed via `--extra-php`.

[\--skip-check]
: If set, the database connection is not checked.

[\--force]
: Overwrites existing files, if present.

[\--config-file=<path>]
: Specify the file path to the config file to be created. Defaults to the root of the WordPress installation and the filename "wp-config.php".

[\--insecure]
: Retry API download without certificate validation if TLS handshake fails. Note: This makes the request vulnerable to a MITM attack.

[\--ssl]
: Use SSL when checking the database connection.

### EXAMPLES

    # Standard wp-config.php file
    $ wp config create --dbname=testing --dbuser=wp --dbpass=securepswd --locale=ro_RO
    Success: Generated 'wp-config.php' file.

    # Enable WP_DEBUG and WP_DEBUG_LOG
    $ wp config create --dbname=testing --dbuser=wp --dbpass=securepswd --extra-php <<PHP
    define( 'WP_DEBUG', true );
    define( 'WP_DEBUG_LOG', true );
    PHP
    Success: Generated 'wp-config.php' file.

    # Avoid disclosing password to bash history by reading from password.txt
    # Using --prompt=dbpass will prompt for the 'dbpass' argument
    $ wp config create --dbname=testing --dbuser=wp --prompt=dbpass < password.txt
    Success: Generated 'wp-config.php' file.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
