# wp core multisite-install

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acore-multisite-install+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

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

### EXAMPLES

    $ wp core multisite-install --title="Welcome to the WordPress" \
    > --admin_user="admin" --admin_password="password" \
    > --admin_email="user@example.com"
    Single site database tables already present.
    Set up multisite database tables.
    Added multisite constants to wp-config.php.
    Success: Network installed. Don't forget to set up rewrite rules.



