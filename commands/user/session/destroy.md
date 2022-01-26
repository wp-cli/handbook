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
    $ wp user list --field=ID | xargs -n 1 wp user session destroy --all
    Success: Destroyed all sessions.
    Success: Destroyed all sessions.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**			  |
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
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
