# wp theme mod

Manage theme mods.

### EXAMPLES

    # Set the 'background_color' theme mod to '000000'.
    $ wp theme mod set background_color 000000
    Success: Theme mod background_color set to 000000

    # Get single theme mod in JSON format.
    $ wp theme mod get background_color --format=json
    [{"key":"background_color","value":"dd3333"}]

    # Remove all theme mods.
    $ wp theme mod remove --all
    Success: Theme mods removed.



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

