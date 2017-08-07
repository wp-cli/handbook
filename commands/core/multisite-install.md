# wp core multisite-install

Install WordPress multisite from scratch.

Creates the WordPress tables in the database using the URL, title, and
default admin user details provided. Then, creates the multisite tables
in the database and adds multisite constants to the wp-config.php.

### OPTIONS

[\--url=&lt;url&gt;]
: The address of the new site.

[\--base=&lt;url-path&gt;]
: Base path after the domain name that each site url in the network will start with.
\---
default: /
\---

[\--subdomains]
: If passed, the network will use subdomains, instead of subdirectories. Doesn't work with 'localhost'.

\--title=&lt;site-title&gt;
: The title of the new site.

\--admin_user=&lt;username&gt;
: The name of the admin user.
\---
default: admin
\---

[\--admin_password=&lt;password&gt;]
: The password for the admin user. Defaults to randomly generated string.

\--admin_email=&lt;email&gt;
: The email address for the admin user.

[\--skip-email]
: Don't send an email notification to the new admin user.

[\--skip-config]
: Don't add multisite constants to wp-config.php.

### EXAMPLES

    $ wp core multisite-install --title="Welcome to the WordPress" \
    > --admin_user="admin" --admin_password="password" \
    > --admin_email="user@example.com"
    Single site database tables already present.
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
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

