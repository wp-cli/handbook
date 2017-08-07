# wp plugin status

See the status of one or all plugins.

### OPTIONS

[&lt;plugin&gt;]
: A particular plugin to show the status for.

### EXAMPLES

    # Displays status of all plugins
    $ wp plugin status
    5 installed plugins:
      I akismet                3.1.11
      I easy-digital-downloads 2.5.16
      A theme-check            20160523.1
      I wen-logo-slider        2.0.3
      M ns-pack                1.0.0
    Legend: I = Inactive, A = Active, M = Must Use

    # Displays status of a plugin
    $ wp plugin status theme-check
    Plugin theme-check details:
        Name: Theme Check
        Status: Active
        Version: 20160523.1
        Author: Otto42, pross
        Description: A simple and easy way to test your theme for all the latest WordPress standards and practices. A great theme development tool!

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

