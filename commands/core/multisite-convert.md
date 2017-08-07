# wp core multisite-convert

Transform a single-site install into a WordPress multisite install.

Creates the multisite database tables, and adds the multisite constants
to wp-config.php.

For those using WordPress with Apache, remember to update the `.htaccess`
file with the appropriate multisite rewrite rules.

### OPTIONS

[\--title=&lt;network-title&gt;]
: The title of the new network.

[\--base=&lt;url-path&gt;]
: Base path after the domain name that each site url will start with.
\---
default: /
\---

[\--subdomains]
: If passed, the network will use subdomains, instead of subdirectories. Doesn't work with 'localhost'.

### EXAMPLES

    $ wp core multisite-convert
    Set up multisite database tables.
    Added multisite constants to wp-config.php.
    Success: Network installed. Don't forget to set up rewrite rules.

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

