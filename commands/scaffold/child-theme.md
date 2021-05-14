# wp scaffold child-theme

Generates child theme based on an existing theme.

Creates a child theme folder with `functions.php` and `style.css` files.

### OPTIONS

&lt;slug&gt;
: The slug for the new child theme.

\--parent_theme=&lt;slug&gt;
: What to put in the 'Template:' header in 'style.css'.

[\--theme_name=&lt;title&gt;]
: What to put in the 'Theme Name:' header in 'style.css'.

[\--author=&lt;full-name&gt;]
: What to put in the 'Author:' header in 'style.css'.

[\--author_uri=&lt;uri&gt;]
: What to put in the 'Author URI:' header in 'style.css'.

[\--theme_uri=&lt;uri&gt;]
: What to put in the 'Theme URI:' header in 'style.css'.

[\--activate]
: Activate the newly created child theme.

[\--enable-network]
: Enable the newly created child theme for the entire network.

[\--force]
: Overwrite files that already exist.

### EXAMPLES

    # Generate a 'sample-theme' child theme based on TwentySixteen
    $ wp scaffold child-theme sample-theme --parent_theme=twentysixteen
    Success: Created '/var/www/example.com/public_html/wp-content/themes/sample-theme'.

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
