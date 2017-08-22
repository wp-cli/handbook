# wp cli

Updates WP-CLI and displays its parameters, aliases, and environmental details.

### Examples

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


