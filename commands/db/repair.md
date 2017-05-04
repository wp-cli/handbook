# wp db repair

Repair the database.

Runs `mysqlcheck` utility with `--repair=true` using `DB_HOST`,
`DB_NAME`, `DB_USER` and `DB_PASSWORD` database credentials
specified in wp-config.php.

[See docs](http://dev.mysql.com/doc/refman/5.7/en/repair-table.html) for
more details on the `REPAIR TABLE` statement.

### EXAMPLES

    $ wp db repair
    Success: Database repaired.


