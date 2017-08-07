# wp user update

Update an existing user.

### OPTIONS

&lt;user&gt;...
: The user login, user email or user ID of the user(s) to update.

[\--user_pass=&lt;password&gt;]
: A string that contains the plain text password for the user.

[\--user_login=&lt;login&gt;]
: A string that contains the user's username for logging in.

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
: A string for whether to enable the rich editor or not. False if not empty.

[\--user_registered=&lt;yyyy-mm-dd-hh-ii-ss&gt;]
: The date the user registered.

[\--role=&lt;role&gt;]
: A string used to set the user's role.

\--&lt;field&gt;=&lt;value&gt;
: One or more fields to update. For accepted fields, see wp_update_user().

### EXAMPLES

    # Update user
    $ wp user update 123 --display_name=Mary --user_pass=marypass
    Success: Updated user 123.

### GLOBAL PARAMETERS

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

