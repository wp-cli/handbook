# wp role create

Create a new role.

### OPTIONS

&lt;role-key&gt;
: The internal name of the role.

&lt;role-name&gt;
: The publicly visible name of the role.

[\--clone=&lt;role&gt;]
: Clone capabilities from an existing role.

### EXAMPLES

    # Create role for Approver.
    $ wp role create approver Approver
    Success: Role with key 'approver' created.

    # Create role for Product Administrator.
    $ wp role create productadmin "Product Administrator"
    Success: Role with key 'productadmin' created.

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

