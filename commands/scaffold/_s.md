# wp scaffold _s

Generate starter code for a theme based on _s.

See the [Underscores website](http://underscores.me/) for more details.

### OPTIONS

&lt;slug&gt;
: The slug for the new theme, used for prefixing functions.

[\--activate]
: Activate the newly downloaded theme.

[\--enable-network]
: Enable the newly downloaded theme for the entire network.

[\--theme_name=&lt;title&gt;]
: What to put in the 'Theme Name:' header in 'style.css'.

[\--author=&lt;full-name&gt;]
: What to put in the 'Author:' header in 'style.css'.

[\--author_uri=&lt;uri&gt;]
: What to put in the 'Author URI:' header in 'style.css'.

[\--sassify]
: Include stylesheets as SASS.

[\--force]
: Overwrite files that already exist.

### EXAMPLES

    # Generate a theme with name "Sample Theme" and author "John Doe"
    $ wp scaffold _s sample-theme --theme_name="Sample Theme" --author="John Doe"
    Success: Created theme 'Sample Theme'.

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

