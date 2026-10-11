# wp user update

Updates an existing user.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;user&gt;...
: The user login, user email or user ID of the user(s) to update.

[\--user_pass=&lt;password&gt;]
: A string that contains the plain text password for the user.

[\--user_nicename=&lt;nice_name&gt;]
: A string that contains a URL-friendly name for the user. The default is the user's username.

[\--user_url=&lt;url&gt;]
: A string containing the user's URL for the user's web site.

[\--user_email=&lt;email&gt;]
: A string containing the user's email address.

[\--display_name=&lt;display_name&gt;]
: A string that will be shown on the site. Defaults to user's username.

[\--nickname=&lt;nickname&gt;]
: The user's nickname, defaults to the user's username.

[\--first_name=&lt;first_name&gt;]
: The user's first name.

[\--last_name=&lt;last_name&gt;]
: The user's last name.

[\--description=&lt;description&gt;]
: A string containing content about the user.

[\--rich_editing=&lt;rich_editing&gt;]
: Whether to enable the rich editor for the user. Accepts 'true' or 'false', or their numeric forms 1 and 0.

[\--syntax_highlighting=&lt;syntax_highlighting&gt;]
: Whether to enable the rich code editor for the user. Accepts 'true' or 'false', or their numeric forms 1 and 0.

[\--comment_shortcuts=&lt;comment_shortcuts&gt;]
: Whether to enable comment moderation keyboard shortcuts for the user. Accepts 'true' or 'false' as a string literal, not boolean.

[\--admin_color=&lt;admin_color&gt;]
: Admin color scheme for the user.

[\--use_ssl=&lt;use_ssl&gt;]
: Whether the user should always access the admin over https.

[\--user_registered=&lt;yyyy-mm-dd-hh-ii-ss&gt;]
: The date the user registered.

[\--user_activation_key=&lt;user_activation_key&gt;]
: Password reset key.

[\--spam=&lt;spam&gt;]
: Multisite only. Whether the user is marked as spam.

[\--show_admin_bar_front=&lt;show_admin_bar_front&gt;]
: Whether to display the admin bar for the user on the site's front end. Accepts 'true' or 'false' as a string literal, not boolean.

[\--role=&lt;role&gt;]
: A string used to set the user's role.

[\--locale=&lt;locale&gt;]
: The user's locale.

[\--meta_input=&lt;meta_input&gt;]
: Array in JSON format of user meta values keyed by their user meta key.

\--&lt;field&gt;=&lt;value&gt;
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
| `--ssh-args=<args>` | Pass additional arguments to SSH (or other tools specified by --ssh scheme). |
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
| `--alias=<name>` | Name of the alias to use. Aliases can reference local WordPress installations or remote SSH connections. Aliases are defined in the wp-cli.yml file. |
| `--assume-https` | Set $_SERVER['HTTPS'] to make WordPress treat the site as HTTPS. Use when WordPress is behind an HTTPS proxy or load balancer. |
