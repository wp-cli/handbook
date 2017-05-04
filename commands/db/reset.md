# wp db reset

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Adb-reset+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Remove all tables from the database.

Runs `DROP_DATABASE` and `CREATE_DATABASE` SQL statements using
`DB_HOST`, `DB_NAME`, `DB_USER` and `DB_PASSWORD` database credentials
specified in wp-config.php.

### OPTIONS

[\--yes]
: Answer yes to the confirmation message.

### EXAMPLES

    $ wp db reset --yes
    Success: Database reset.


