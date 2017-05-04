# wp db reset

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


