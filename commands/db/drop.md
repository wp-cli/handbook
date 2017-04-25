# wp db drop

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Adb-drop+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

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



