# wp db cli

Open a MySQL console using credentials from wp-config.php

### OPTIONS

[\--database=&lt;database&gt;]
: Use a specific database. Defaults to DB_NAME.

[\--default-character-set=&lt;character-set&gt;]
: Use a specific character set. Defaults to DB_CHARSET when defined.

[\--&lt;field&gt;=&lt;value&gt;]
: Extra arguments to pass to the MySQL executable.

### EXAMPLES

    # Open MySQL console
    $ wp db cli
    mysql&gt;

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

