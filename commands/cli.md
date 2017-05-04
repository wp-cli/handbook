# wp cli

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acli+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage WP-CLI itself.

### EXAMPLES

    # Display the version currently installed.
    $ wp cli version
    WP-CLI 0.24.1

    # Check for updates to WP-CLI.
    $ wp cli check-update
    Success: WP-CLI is at the latest version.

    # Update WP-CLI to the latest stable release.
    $ wp cli update
    You have version 0.24.0. Would you like to update to 0.24.1? [y/n] y
    Downloading from https://github.com/wp-cli/wp-cli/releases/download/v0.24.1/wp-cli-0.24.1.phar...
    New version works. Proceeding to replace.
    Success: Updated WP-CLI to 0.24.1.


