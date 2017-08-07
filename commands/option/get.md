# wp option get

Get the value for an option.

### OPTIONS

&lt;key&gt;
: Key for the option.

[\--format=&lt;format&gt;]
: Get value in a particular format.
\---
default: var_export
options:
  - var_export
  - json
  - yaml
\---

### EXAMPLES

    # Get option.
    $ wp option get home
    http://example.com

    # Get blog description.
    $ wp option get blogdescription
    A random blog description

    # Get blog name
    $ wp option get blogname
    A random blog name

    # Get admin email.
    $ wp option get admin_email
    someone@example.com

    # Get option in JSON format.
    $ wp option get active_plugins --format=json
    {"0":"dynamically-dynamic-sidebar\/dynamically-dynamic-sidebar.php","1":"monster-widget\/monster-widget.php","2":"show-current-template\/show-current-template.php","3":"theme-check\/theme-check.php","5":"wordpress-importer\/wordpress-importer.php"}

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

