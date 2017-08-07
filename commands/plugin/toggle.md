# wp plugin toggle

Toggle a plugin's activation state.

If the plugin is active, then it will be deactivated. If the plugin is
inactive, then it will be activated.

### OPTIONS

&lt;plugin&gt;...
: One or more plugins to toggle.

[\--network]
: If set, the plugin will be toggled for the entire multisite network.

### EXAMPLES

    # Akismet is currently activated
    $ wp plugin toggle akismet
    Plugin 'akismet' deactivated.
    Success: Toggled 1 of 1 plugins.

    # Akismet is currently deactivated
    $ wp plugin toggle akismet
    Plugin 'akismet' activated.
    Success: Toggled 1 of 1 plugins.

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

