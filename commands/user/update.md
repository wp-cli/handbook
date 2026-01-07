# wp user update

Updates an existing user.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

<user>...
: The user login, user email or user ID of the user(s) to update.

[\--user_pass=<password>]
: A string that contains the plain text password for the user.

[\--user_nicename=<nice_name>]
: A string that contains a URL-friendly name for the user. The default is the user's username.

[\--user_url=<url>]
: A string containing the user's URL for the user's web site.

[\--user_email=<email>]
: A string containing the user's email address.

[\--display_name=<display_name>]
: A string that will be shown on the site. Defaults to user's username.

[\--nickname=<nickname>]
: The user's nickname, defaults to the user's username.

[\--first_name=<first_name>]
: The user's first name.

[\--last_name=<last_name>]
: The user's last name.

[\--description=<description>]
: A string containing content about the user.

[\--rich_editing=<rich_editing>]
: A string for whether to enable the rich editor or not. False if not empty.

[\--user_registered=<yyyy-mm-dd-hh-ii-ss>]
: The date the user registered.

[\--role=<role>]
: A string used to set the user's role.

\--<field>=<value>
: One or more fields to update. For accepted fields, see wp_update_user().

[\--skip-email]
: Don't send an email notification to the user.

### EXAMPLES

    # Update user
    $ wp user update 123 --display_name=Mary --user_pass=marypass
    Success: Updated user 123.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
