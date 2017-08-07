# wp cli check-update

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

