# wp db export

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Adb-export+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

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


