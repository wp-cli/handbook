# wp cron schedule list

List available cron schedules.

### OPTIONS

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each schedule.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - ids
  - json
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each cron schedule:

* name
* display
* interval

There are no additional fields.

### EXAMPLES

    # List available cron schedules
    $ wp cron schedule list
    +------------+-------------+----------+
    | name       | display     | interval |
    +------------+-------------+----------+
    | hourly     | Once Hourly | 3600     |
    | twicedaily | Twice Daily | 43200    |
    | daily      | Once Daily  | 86400    |
    +------------+-------------+----------+

    # List id of available cron schedule
    $ wp cron schedule list --fields=name --format=ids
    hourly twicedaily daily

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker" or "docker-compose"). |
| `--http=<http>` | Perform operation against a remote WordPress install over HTTP. |
| `--user=<id|login|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors; add verbosity to WP-CLI bootstrap. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
