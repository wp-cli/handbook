# wp role reset

Resets any default role to default capabilities.

Uses WordPress' `populate_roles()` function to put one or more roles back into the state they were at in the a fresh WordPress install. Removes any capabilities that were added, and restores any capabilities that were removed. Custom roles are not affected.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[<role-key>...]
: The internal name of one or more roles to reset.

[\--all]
: If set, all default roles will be reset.

### EXAMPLES

    # Reset three roles.
    $ wp role reset administrator author contributor
    Restored 1 capability to and removed 0 capabilities from 'administrator' role.
    No changes necessary for 'author' role.
    No changes necessary for 'contributor' role.
    Success: 1 of 3 roles reset.

    # Reset a custom role.
    $ wp role reset custom_role
    Custom role 'custom_role' not affected.
    Error: Must specify a default role to reset.

    # Reset all default roles.
    $ wp role reset --all
    Success: All default roles reset.

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
