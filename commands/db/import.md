# wp db import

Import a database from a file or from STDIN.

Runs SQL queries using `DB_HOST`, `DB_NAME`, `DB_USER` and
`DB_PASSWORD` database credentials specified in wp-config.php. This
does not create database by itself and only performs whatever tasks are
defined in the SQL.

### OPTIONS

[&lt;file&gt;]
: The name of the SQL file to import. If '-', then reads from STDIN. If omitted, it will look for '{dbname}.sql'.

[\--skip-optimization]
: When using an SQL file, do not include speed optimization such as disabling auto-commit and key checks.

### EXAMPLES

    # Import MySQL from a file.
    $ wp db import wordpress_dbase.sql
    Success: Imported from 'wordpress_dbase.sql'.


