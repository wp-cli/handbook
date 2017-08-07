# wp language core

Manage core language.

### EXAMPLES

    # Install language
    $ wp language core install nl_NL
    Success: Language installed.

    # Activate language
    $ wp language core activate nl_NL
    Success: Language activated.

    # Uninstall language
    $ wp language core uninstall nl_NL
    Success: Language uninstalled.

    # List installed languages
    $ wp language core list --status=installed
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | language | english_name | native_name | status    | update    | updated             |
    +----------+--------------+-------------+-----------+-----------+---------------------+
    | nl_NL    | Dutch        | Nederlands  | installed | available | 2016-05-13 08:12:50 |
    +----------+--------------+-------------+-----------+-----------+---------------------+



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

