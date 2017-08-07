# wp db

Perform basic database operations using credentials stored in wp-config.php

### EXAMPLES

    # Create a new database.
    $ wp db create
    Success: Database created.

    # Drop an existing database.
    $ wp db drop --yes
    Success: Database dropped.

    # Reset the current database.
    $ wp db reset --yes
    Success: Database reset.

    # Execute a SQL query stored in a file.
    $ wp db query < debug.sql

### GLOBAL PARAMETERS

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

