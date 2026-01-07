# wp user create

Creates a new user.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

<user-login>
: The login of the user to create.

<user-email>
: The email address of the user to create.

[\--role=<role>]
: The role of the user to create. Default: default role. Possible values include 'administrator', 'editor', 'author', 'contributor', 'subscriber'.

[\--user_pass=<password>]
: The user password. Default: randomly generated.

[\--user_registered=<yyyy-mm-dd-hh-ii-ss>]
: The date the user registered. Default: current date.

[\--display_name=<name>]
: The display name.

[\--user_nicename=<nice_name>]
: A string that contains a URL-friendly name for the user. The default is the user's username.

[\--user_url=<url>]
: A string containing the user's URL for the user's web site.

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

[\--send-email]
: Send an email to the user with their new account details.

[\--porcelain]
: Output just the new user id.

### EXAMPLES

    # Create user
    $ wp user create bob bob@example.com --role=author
    Success: Created user 3.
    Password: k9**&amp;I4vNH(&amp;

    # Create user without showing password upon success
    $ wp user create ann ann@example.com --porcelain
    4

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
