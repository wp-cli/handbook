# wp theme update

Update one or more themes.

### OPTIONS

[&lt;theme&gt;...]
: One or more themes to update.

[\--all]
: If set, all themes that have updates will be updated.

[\--exclude=&lt;theme-names&gt;]
: Comma separated list of theme names that should be excluded from updating.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - summary
\---

[\--version=&lt;version&gt;]
: If set, the theme will be updated to the specified version.

[\--dry-run]
: Preview which themes would be updated.

### EXAMPLES

    # Update multiple themes
    $ wp theme update twentyfifteen twentysixteen
    Downloading update from https://downloads.wordpress.org/theme/twentyfifteen.1.5.zip...
    Unpacking the update...
    Installing the latest version...
    Removing the old version of the theme...
    Theme updated successfully.
    Downloading update from https://downloads.wordpress.org/theme/twentysixteen.1.2.zip...
    Unpacking the update...
    Installing the latest version...
    Removing the old version of the theme...
    Theme updated successfully.
    +---------------+-------------+-------------+---------+
    | name          | old_version | new_version | status  |
    +---------------+-------------+-------------+---------+
    | twentyfifteen | 1.4         | 1.5         | Updated |
    | twentysixteen | 1.1         | 1.2         | Updated |
    +---------------+-------------+-------------+---------+
    Success: Updated 2 of 2 themes.

    # Exclude themes updates when bulk updating the themes
    $ wp theme update --all --exclude=twentyfifteen
    Downloading update from https://downloads.wordpress.org/theme/astra.1.0.5.1.zip...
    Unpacking the update...
    Installing the latest version...
    Removing the old version of the theme...
    Theme updated successfully.
    Downloading update from https://downloads.wordpress.org/theme/twentyseventeen.1.2.zip...
    Unpacking the update...
    Installing the latest version...
    Removing the old version of the theme...
    Theme updated successfully.
    +-----------------+----------+---------+----------------+
    | name            | status   | version | update_version |
    +-----------------+----------+---------+----------------+
    | astra           | inactive | 1.0.1   | 1.0.5.1        |
    | twentyseventeen | inactive | 1.1     | 1.2            |
    +-----------------+----------+---------+----------------+
    Success: Updated 2 of 2 themes.

    # Update all themes
    $ wp theme update --all

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
