# wp db check

Check the current status of the database.

Runs `mysqlcheck` utility with `--check` using `DB_HOST`,
`DB_NAME`, `DB_USER` and `DB_PASSWORD` database credentials
specified in wp-config.php.

[See docs](http://dev.mysql.com/doc/refman/5.7/en/check-table.html)
for more details on the `CHECK TABLE` statement.

### EXAMPLES

    $ wp db check
    Success: Database checked.


