---
layout: default
title: 'wp db optimize'
display_global_parameters: true
---

`wp db optimize` - Optimize the database in MySQL.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Adb-optimize+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Runs `mysqlcheck` utility with `--optimize=true` using `DB_HOST`,
`DB_NAME`, `DB_USER` and `DB_PASSWORD` database credentials
specified in wp-config.php.

[See docs](http://dev.mysql.com/doc/refman/5.7/en/optimize-table.html)
for more details on the `OPTIMIZE_TABLE` statement.

### EXAMPLES

    $ wp db optimize
    Success: Database optimized.



