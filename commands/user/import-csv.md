# wp user import-csv

Import users from a CSV file.

If the user already exists (matching the email address or login), then
the user is updated unless the `--skip-update` flag is used.

### OPTIONS

&lt;file&gt;
: The local or remote CSV file of users to import.

[\--send-email]
: Send an email to new users with their account details.

[\--skip-update]
: Don't update users that already exist.

### EXAMPLES

    # Import users from local CSV file
    $ wp user import-csv /path/to/users.csv
    Success: bobjones created
    Success: newuser1 created
    Success: existinguser created

    # Import users from remote CSV file
    $ wp user import-csv http://example.com/users.csv

    Sample users.csv file:

    user_login,user_email,display_name,role
    bobjones,bobjones@example.com,Bob Jones,contributor
    newuser1,newuser1@example.com,New User,author
    existinguser,existinguser@example.com,Existing User,administrator

### GLOBAL PARAMETERS

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

