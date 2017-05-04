# wp db drop

Delete the existing database.

Runs `DROP_DATABASE` SQL statement using `DB_HOST`, `DB_NAME`,
`DB_USER` and `DB_PASSWORD` database credentials specified in
wp-config.php.

### OPTIONS

[\--yes]
: Answer yes to the confirmation message.

### EXAMPLES

    $ wp db drop --yes
    Success: Database dropped.


