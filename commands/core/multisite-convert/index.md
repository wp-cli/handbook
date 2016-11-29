---
layout: default
title: 'wp core multisite-convert'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [core](/commands/core/) &raquo; multisite-convert</small>

`wp core multisite-convert` - Transform a single-site install into a WordPress multisite install.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acore-multisite-convert+sort%3Aupdated-desc">Github issues</a></small>

<hr />

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



