# wp cli check-update

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acli-check-update+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Check to see if there is a newer version of WP-CLI available.

Queries the Github releases API. Returns available versions if there are
updates available, or success message if using the latest release.

### OPTIONS

[\--patch]
: Only list patch updates.

[\--minor]
: Only list minor updates.

[\--major]
: Only list major updates.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each update.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields. Defaults to version,update_type,package_url.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - count
  - yaml
\---

### EXAMPLES

    # Check for update.
    $ wp cli check-update
    Success: WP-CLI is at the latest version.

    # Check for update and new version is available.
    $ wp cli check-update
    +---------+-------------+-------------------------------------------------------------------------------+
    | version | update_type | package_url                                                                   |
    +---------+-------------+-------------------------------------------------------------------------------+
    | 0.24.1  | patch       | https://github.com/wp-cli/wp-cli/releases/download/v0.24.1/wp-cli-0.24.1.phar |
    +---------+-------------+-------------------------------------------------------------------------------+



