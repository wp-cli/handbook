# wp menu item add-custom

Adds a custom menu item.

### OPTIONS

&lt;menu&gt;
: The name, slug, or term ID for the menu.

&lt;title&gt;
: Title for the link.

&lt;link&gt;
: Target URL for the link.

[\--description=&lt;description&gt;]
: Set a custom description for the menu item.

[\--attr-title=&lt;attr-title&gt;]
: Set a custom title attribute for the menu item.

[\--target=&lt;target&gt;]
: Set a custom link target for the menu item.

[\--classes=&lt;classes&gt;]
: Set a custom link classes for the menu item.

[\--position=&lt;position&gt;]
: Specify the position of this menu item.

[\--parent-id=&lt;parent-id&gt;]
: Make this menu item a child of another menu item.

[\--porcelain]
: Output just the new menu item id.

### EXAMPLES

    $ wp menu item add-custom sidebar-menu Apple http://apple.com
    Success: Menu item added.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress install over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
