# wp core

Download, install, update and manage a WordPress install.

### EXAMPLES

    # Download WordPress core
    $ wp core download --locale=nl_NL
    Downloading WordPress 4.5.2 (nl_NL)...
    md5 hash verified: c5366d05b521831dd0b29dfc386e56a5
    Success: WordPress downloaded.

    # Install WordPress
    $ wp core install --url=example.com --title=Example --admin_user=supervisor --admin_password=strongpassword --admin_email=info@example.com
    Success: WordPress installed successfully.

    # Display the WordPress version
    $ wp core version
    4.5.2

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

