# wp db

Performs basic database operations using the wp-config credentials.

Retrieve info on and run SQL commands in the [WordPress database](https://codex.wordpress.org/Database_Description).

### Examples

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


