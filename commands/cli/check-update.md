# wp cli check-update

Check to see if there is a newer version of WP-CLI available.

Queries the Github releases API. Returns available versions if there are updates available, or success message if using the latest release.

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

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress install over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors; add verbosity to WP-CLI bootstrap. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
