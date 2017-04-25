# wp cli update

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acli-update+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Update WP-CLI to the latest release.

Default behavior is to check the releases API for the newest stable
version, and prompt if one is available.

Use `--stable` to install or reinstall the latest stable version.

Use `--nightly` to install the latest built version of the master branch.
While not recommended for production, nightly contains the latest and
greatest, and should be stable enough for development and staging
environments.

Only works for the Phar installation mechanism.

### OPTIONS

[\--patch]
: Only perform patch updates.

[\--minor]
: Only perform minor updates.

[\--major]
: Only perform major updates.

[\--stable]
: Update to the latest stable release. Skips update check.

[\--nightly]
: Update to the latest built version of the master branch. Potentially unstable.

[\--yes]
: Do not prompt for confirmation.

### EXAMPLES

    # Update CLI.
    $ wp cli update
    You have version 0.24.0. Would you like to update to 0.24.1? [y/n] y
    Downloading from https://github.com/wp-cli/wp-cli/releases/download/v0.24.1/wp-cli-0.24.1.phar...
    New version works. Proceeding to replace.
    Success: Updated WP-CLI to 0.24.1.



