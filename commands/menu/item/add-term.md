# wp menu item add-term

Add a taxonomy term as a menu item.

### OPTIONS

&lt;menu&gt;
: The name, slug, or term ID for the menu.

&lt;taxonomy&gt;
: Taxonomy of the term to be added.

&lt;term-id&gt;
: Term ID of the term to be added.

[\--title=&lt;title&gt;]
: Set a custom title for the menu item.

[\--link=&lt;link&gt;]
: Set a custom url for the menu item.

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

    $ wp menu item add-term sidebar-menu post_tag 24
    Success: Menu item added.

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

