# wp package update

Update all installed WP-CLI packages to their latest version.

### EXAMPLES

    $ wp package update
    Using Composer to update packages...
    ---
    Loading composer repositories with package information
    Updating dependencies
    Resolving dependencies through SAT
    Dependency resolution completed in 0.074 seconds
    Analyzed 1062 packages to resolve dependencies
    Analyzed 22383 rules to resolve dependencies
    Writing lock file
    Generating autoload files
    ---
    Success: Packages updated.

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

