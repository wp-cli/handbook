# wp package path

Get the path to an installed WP-CLI package, or the package directory.

If you want to contribute to a package, this is a great way to jump to it.

### OPTIONS

[&lt;name&gt;]
: Name of the package to get the directory for.

### EXAMPLES

    # Get package path
    $ wp package path
    /home/person/.wp-cli/packages/

    # Change directory to package path
    $ cd $(wp package path) &amp;&amp; pwd
    /home/vagrant/.wp-cli/packages

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

