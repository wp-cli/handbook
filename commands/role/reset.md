# wp role reset

Reset any default role to default capabilities.

### OPTIONS

[&lt;role-key&gt;...]
: The internal name of one or more roles to reset.

[\--all]
: If set, all default roles will be reset.

### EXAMPLES

    # Reset role.
    $ wp role reset administrator author contributor
    Success: Reset 1/3 roles.

    # Reset all default roles.
    $ wp role reset --all
    Success: All default roles reset.

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

