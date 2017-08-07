# wp db export

Exports the database to a file or to STDOUT.

Runs `mysqldump` utility using `DB_HOST`, `DB_NAME`, `DB_USER` and
`DB_PASSWORD` database credentials specified in wp-config.php.

### OPTIONS

[&lt;file&gt;]
: The name of the SQL file to export. If '-', then outputs to STDOUT. If omitted, it will be '{dbname}.sql'.

[\--&lt;field&gt;=&lt;value&gt;]
: Extra arguments to pass to mysqldump

[\--tables=&lt;tables&gt;]
: The comma separated list of specific tables to export. Excluding this parameter will export all tables in the database.

[\--exclude_tables=&lt;tables&gt;]
: The comma separated list of specific tables that should be skipped from exporting. Excluding this parameter will export all tables in the database.

[\--porcelain]
: Output filename for the exported database.

### EXAMPLES

    # Export database with drop query included
    $ wp db export --add-drop-table
    Success: Exported to 'wordpress_dbase.sql'.

    # Export certain tables
    $ wp db export --tables=wp_options,wp_users
    Success: Exported to 'wordpress_dbase.sql'.

    # Export all tables matching a wildcard
    $ wp db export --tables=$(wp db tables 'wp_user*' --format=csv)
    Success: Exported to 'wordpress_dbase.sql'.

    # Export all tables matching prefix
    $ wp db export --tables=$(wp db tables --all-tables-with-prefix --format=csv)
    Success: Exported to 'wordpress_dbase.sql'.

    # Skip certain tables from the exported database
    $ wp db export --exclude_tables=wp_options,wp_users
    Success: Exported to 'wordpress_dbase.sql'.

    # Skip all tables matching a wildcard from the exported database
    $ wp db export --exclude_tables=$(wp db tables 'wp_user*' --format=csv)
    Success: Exported to 'wordpress_dbase.sql'.

    # Skip all tables matching prefix from the exported database
    $ wp db export --exclude_tables=$(wp db tables --all-tables-with-prefix --format=csv)
    Success: Exported to 'wordpress_dbase.sql'.

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

