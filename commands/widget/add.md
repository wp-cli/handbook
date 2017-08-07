# wp widget add

Add a widget to a sidebar.

Creates a new widget entry in the database, and associates it with the
sidebar.

### OPTIONS

&lt;name&gt;
: Widget name.

&lt;sidebar-id&gt;
: ID for the corresponding sidebar.

[&lt;position&gt;]
: Widget's current position within the sidebar. Defaults to last

[\--&lt;field&gt;=&lt;value&gt;]
: Widget option to add, with its new value

### EXAMPLES

    # Add a new calendar widget to sidebar-1 with title "Calendar"
    $ wp widget add calendar sidebar-1 2 --title="Calendar"
    Success: Added widget to sidebar.

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

