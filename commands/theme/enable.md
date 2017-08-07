# wp theme enable

Enable a theme on a WordPress multisite install.

Permits theme to be activated from the dashboard of a site on a WordPress
multisite install.

### OPTIONS

&lt;theme&gt;
: The theme to enable.

[\--network]
: If set, the theme is enabled for the entire network

[\--activate]
: If set, the theme is activated for the current site. Note that
the "network" flag has no influence on this.

### EXAMPLES

    # Enable theme
    $ wp theme enable twentysixteen
    Success: Enabled the 'Twenty Sixteen' theme.

    # Network enable theme
    $ wp theme enable twentysixteen --network
    Success: Network enabled the 'Twenty Sixteen' theme.

    # Network enable and activate theme for current site
    $ wp theme enable twentysixteen --activate
    Success: Enabled the 'Twenty Sixteen' theme.
    Success: Switched to 'Twenty Sixteen' theme.

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

