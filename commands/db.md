# wp db

Performs basic database operations using credentials stored in wp-config.php.

Unless overridden, these commands run on the `after_wp_config_load` hook, after wp-config.php has been loaded into scope.

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


