---
layout: default
title: 'wp core multisite-install'
display_global_parameters: true
---

`wp core multisite-install` - Install multisite from scratch.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acore-multisite-install+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--url=&lt;url&gt;]
: The address of the new site.

[\--base=&lt;url-path&gt;]
: Base path after the domain name that each site url in the network will start with.
Default: '/'

[\--subdomains]
: If passed, the network will use subdomains, instead of subdirectories. Doesn't work with 'localhost'.

\--title=&lt;site-title&gt;
: The title of the new site.

\--admin_user=&lt;username&gt;
: The name of the admin user. Default: 'admin'

\--admin_password=&lt;password&gt;
: The password for the admin user.

\--admin_email=&lt;email&gt;
: The email address for the admin user.

[\--skip-email]
: Don't send an email notification to the new admin user.



