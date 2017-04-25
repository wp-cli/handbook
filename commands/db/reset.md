# wp db reset

<small>[Commands](/commands/) &raquo; [db](/commands/db/) &raquo; reset</small>

`wp db reset` - Remove all tables from the database.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Adb-reset+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Runs `DROP_DATABASE` and `CREATE_DATABASE` SQL statements using
`DB_HOST`, `DB_NAME`, `DB_USER` and `DB_PASSWORD` database credentials
specified in wp-config.php.

### OPTIONS

[\--yes]
: Answer yes to the confirmation message.

### EXAMPLES

    $ wp db reset --yes
    Success: Database reset.



