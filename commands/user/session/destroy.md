# wp user session destroy

Destroy a session for the given user.

### OPTIONS

&lt;user&gt;
: User ID, user email, or user login.

[&lt;token&gt;]
: The token of the session to destroy. Defaults to the most recently created session.

[\--all]
: Destroy all of the user's sessions.

### EXAMPLES

    # Destroy the most recent session of the given user.
    $ wp user session destroy admin
    Success: Destroyed session. 3 sessions remaining.

    # Destroy a specific session of the given user.
    $ wp user session destroy admin e073ad8540a9c2...
    Success: Destroyed session. 2 sessions remaining.

    # Destroy all the sessions of the given user.
    $ wp user session destroy admin --all
    Success: Destroyed all sessions.

    # Destroy all sessions for all users.
    $ wp user list --field=ID | xargs wp user session destroy --all
    Success: Destroyed all sessions.
    Success: Destroyed all sessions.

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

