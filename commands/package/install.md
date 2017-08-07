# wp package install

Install a WP-CLI package.

Packages are required to be a valid Composer package, and can be
specified as:

* Package name from WP-CLI's package index.
* Git URL accessible by the current shell user.
* Path to a directory on the local machine.
* Local or remote .zip file.

When installing a local directory, WP-CLI simply registers a
reference to the directory. If you move or delete the directory, WP-CLI's
reference breaks.

When installing a .zip file, WP-CLI extracts the package to
`~/.wp-cli/packages/local/&lt;package-name&gt;`.

### OPTIONS

&lt;name|git|path|zip&gt;
: Name, git URL, directory path, or .zip file for the package to install.
Names can optionally include a version constraint
(e.g. wp-cli/server-command:@stable).

### EXAMPLES

    # Install the latest development version from the package index.
    $ wp package install wp-cli/server-command
    Installing package wp-cli/server-command (dev-master)
    Updating /home/person/.wp-cli/packages/composer.json to require the package...
    Using Composer to install the package...
    ---
    Loading composer repositories with package information
    Updating dependencies
    Resolving dependencies through SAT
    Dependency resolution completed in 0.005 seconds
    Analyzed 732 packages to resolve dependencies
    Analyzed 1034 rules to resolve dependencies
     - Installing package
    Writing lock file
    Generating autoload files
    ---
    Success: Package installed.

    # Install the latest stable version.
    $ wp package install wp-cli/server-command:@stable

    # Install a package hosted at a git URL.
    $ wp package install git@github.com:runcommand/hook.git

    # Install a package in a .zip file.
    $ wp package install google-sitemap-generator-cli.zip

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

