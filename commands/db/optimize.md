# wp db optimize

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Adb-optimize+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Optimize the database.

Runs `mysqlcheck` utility with `--optimize=true` using `DB_HOST`,
`DB_NAME`, `DB_USER` and `DB_PASSWORD` database credentials
specified in wp-config.php.

[See docs](http://dev.mysql.com/doc/refman/5.7/en/optimize-table.html)
for more details on the `OPTIMIZE TABLE` statement.

### EXAMPLES

    $ wp db optimize
    Success: Database optimized.



