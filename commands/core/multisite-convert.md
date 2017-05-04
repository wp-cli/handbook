# wp core multisite-convert

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acore-multisite-convert+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

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


