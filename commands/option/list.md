# wp option list

Lists options and their values.

### OPTIONS

[\--search=&lt;pattern&gt;]
: Use wildcards ( * and ? ) to match option name.

[\--exclude=&lt;pattern&gt;]
: Pattern to exclude. Use wildcards ( * and ? ) to match option name.

[\--autoload=&lt;value&gt;]
: Match only autoload options when value is on, and only not-autoload option when off.

[\--transients]
: List only transients. Use `--no-transients` to ignore all transients.

[\--unserialize]
: Unserialize option values in output.

[\--field=&lt;field&gt;]
: Prints the value of a single field.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: The serialization format for the value. total_bytes displays the total size of matching options in bytes.
\---
default: table
options:
  - table
  - json
  - csv
  - count
  - yaml
  - total_bytes
\---

[\--orderby=&lt;fields&gt;]
: Set orderby which field.
\---
default: option_id
options:
 - option_id
 - option_name
 - option_value
\---

[\--order=&lt;order&gt;]
: Set ascending or descending order.
\---
default: asc
options:
 - asc
 - desc
\---

### AVAILABLE FIELDS

This field will be displayed by default for each matching option:

* option_name
* option_value

These fields are optionally available:

* autoload
* size_bytes

### EXAMPLES

    # Get the total size of all autoload options.
    $ wp option list --autoload=on --format=total_bytes
    33198

    # Find biggest transients.
    $ wp option list --search="*_transient_*" --fields=option_name,size_bytes | sort -n -k 2 | tail
    option_name size_bytes
    _site_transient_timeout_theme_roots 10
    _site_transient_theme_roots 76
    _site_transient_update_themes   181
    _site_transient_update_core 808
    _site_transient_update_plugins  6645

    # List all options beginning with "i2f_".
    $ wp option list --search="i2f_*"
    +-------------+--------------+
    | option_name | option_value |
    +-------------+--------------+
    | i2f_version | 0.1.0        |
    +-------------+--------------+

    # Delete all options beginning with "theme_mods_".
    $ wp option list --search="theme_mods_*" --field=option_name | xargs -I % wp option delete %
    Success: Deleted 'theme_mods_twentysixteen' option.
    Success: Deleted 'theme_mods_twentyfifteen' option.
    Success: Deleted 'theme_mods_twentyfourteen' option.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
