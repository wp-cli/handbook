# wp package

Lists, installs, and removes WP-CLI packages.

WP-CLI packages are community-maintained projects built on WP-CLI. They can contain WP-CLI commands, but they can also just extend WP-CLI in some way.

Learn how to create your own command from the
[Commands Cookbook](https://make.wordpress.org/cli/handbook/commands-cookbook/)

### EXAMPLES

    # List installed packages
    $ wp package list
    +-----------------------+------------------------------------------+---------+------------+
    | name                  | description                              | authors | version    |
    +-----------------------+------------------------------------------+---------+------------+
    | wp-cli/server-command | Start a development server for WordPress |         | dev-main |
    +-----------------------+------------------------------------------+---------+------------+

    # Install the latest development version of the package
    $ wp package install wp-cli/server-command
    Installing package wp-cli/server-command (dev-main)
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

    # Uninstall package
    $ wp package uninstall wp-cli/server-command
    Removing require statement from /home/person/.wp-cli/packages/composer.json
    Deleting package directory /home/person/.wp-cli/packages/vendor/wp-cli/server-command
    Regenerating Composer autoload.
    Success: Uninstalled package.


