# wp user import-csv

Imports users from a CSV file.

If the user already exists (matching the email address or login), then the user is updated unless the `--skip-update` flag is used.

### OPTIONS

&lt;file&gt;
: The local or remote CSV file of users to import. If '-', then reads from STDIN.

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

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
