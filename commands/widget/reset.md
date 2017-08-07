# wp widget reset

Reset sidebar.

Removes all widgets from the sidebar and places them in Inactive Widgets.

### OPTIONS

[&lt;sidebar-id&gt;...]
: One or more sidebars to reset.

[\--all]
: If set, all sidebars will be reset.

### EXAMPLES

    # Reset a sidebar
    $ wp widget reset sidebar-1
    Success: Sidebar 'sidebar-1' reset.

    # Reset multiple sidebars
    $ wp widget reset sidebar-1 sidebar-2
    Success: Sidebar 'sidebar-1' reset.
    Success: Sidebar 'sidebar-2' reset.

    # Reset all sidebars
    $ wp widget reset --all
    Success: Sidebar 'sidebar-1' reset.
    Success: Sidebar 'sidebar-2' reset.
    Success: Sidebar 'sidebar-3' reset.

### GLOBAL PARAMETERS

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

