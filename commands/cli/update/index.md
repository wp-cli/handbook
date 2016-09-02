---
layout: default
title: 'wp cli update'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [cli](/commands/cli/) &raquo; update</small>

`wp cli update` - Fetch most recent update matching the requirements. Returns the available versions if there are updates, or empty if no update available.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acli-update+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--patch]
: Only perform patch updates

[\--minor]
: Only perform minor updates

[\--major]
: Only perform major updates

[\--nightly]
: Update to the latest built version of the master branch. Potentially unstable.

[\--yes]
: Do not prompt for confirmation

### EXAMPLES

    $ wp cli update
    You have version 0.23.0. Would you like to update to 0.23.1? [y/n] y
    Downloading from https://github.com/wp-cli/wp-cli/releases/download/v0.23.1/wp-cli-0.23.1.phar...
    New version works. Proceeding to replace.
    Success: Updated WP-CLI to 0.23.1



