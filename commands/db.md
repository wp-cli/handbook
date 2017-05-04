# wp db

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Adb+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Perform basic database operations using credentials stored in wp-config.php

### EXAMPLES

    # Create a new database.
    $ wp db create
    Success: Database created.

    # Drop an existing database.
    $ wp db drop --yes
    Success: Database dropped.

    # Reset the current database.
    $ wp db reset --yes
    Success: Database reset.

    # Execute a SQL query stored in a file.
    $ wp db query < debug.sql


