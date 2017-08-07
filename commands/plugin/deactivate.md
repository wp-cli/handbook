# wp plugin deactivate

Deactivate a plugin.

### OPTIONS

[&lt;plugin&gt;...]
: One or more plugins to deactivate.

[\--uninstall]
: Uninstall the plugin after deactivation.

[\--all]
: If set, all plugins will be deactivated.

[\--network]
: If set, the plugin will be deactivated for the entire multisite network.

### EXAMPLES

    # Deactivate plugin
    $ wp plugin deactivate hello
    Plugin 'hello' deactivated.
    Success: Deactivated 1 of 1 plugins.

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

