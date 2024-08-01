# wp package

Lists, installs, and removes WP-CLI packages.

Unless overridden, these commands run on the `before_wp_load` hook, just before the WP load process begins.

WP-CLI packages are community-maintained projects built on WP-CLI. They can contain WP-CLI commands, but they can also just extend WP-CLI in some way.

Learn how to create your own command from the
[Commands Cookbook](https://make.wordpress.org/cli/handbook/guides/commands-cookbook/)

### EXAMPLES

    # List installed packages.
    $ wp package list
    +-----------------------+------------------+----------+-----------+----------------+
    | name                  | authors          | version  | update    | update_version |
    +-----------------------+------------------+----------+-----------+----------------+
    | wp-cli/server-command | Daniel Bachhuber | dev-main | available | 2.x-dev        |
    +-----------------------+------------------+----------+-----------+----------------+

    # Install the latest development version of the package.
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

    # Uninstall package.
    $ wp package uninstall wp-cli/server-command
    Removing require statement for package 'wp-cli/server-command' from /home/person/.wp-cli/packages/composer.json
    Removing repository details from /home/person/.wp-cli/packages/composer.json
    Removing package directories and regenerating autoloader...
    Success: Uninstalled package.


