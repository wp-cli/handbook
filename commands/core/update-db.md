# wp core update-db

Run the WordPress database update procedure.

[\--network]
: Update databases for all sites on a network

[\--dry-run]
: Compare database versions without performing the update.

### EXAMPLES

    # Update the WordPress database
    $ wp core update-db
    Success: WordPress database upgraded successfully from db version 36686 to 35700.

    # Update databases for all sites on a network
    $ wp core update-db --network
    WordPress database upgraded successfully from db version 35700 to 29630 on example.com/
    Success: WordPress database upgraded on 123/123 sites

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

