# wp theme path

Get the path to a theme or to the theme directory.

### OPTIONS

[&lt;theme&gt;]
: The theme to get the path to. Path includes "style.css" file.
If not set, will return the path to the themes directory.

[\--dir]
: If set, get the path to the closest parent directory, instead of the
theme's "style.css" file.

### EXAMPLES

    # Get theme path
    $ wp theme path
    /var/www/example.com/public_html/wp-content/themes

    # Change directory to theme path
    $ cd $(wp theme path)

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

