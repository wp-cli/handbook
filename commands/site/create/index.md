---
layout: default
title: 'wp site create'
display_global_parameters: true
---

`wp site create` - Create a site in a multisite install.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acreate+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

\--slug=&lt;slug&gt;
: Path for the new site. Subdomain on subdomain installs, directory on subdirectory installs.

[\--title=&lt;title&gt;]
: Title of the new site. Default: prettified slug.

[\--email=&lt;email&gt;]
: Email for Admin user. User will be created if none exists. Assignement to Super Admin if not included.

[\--network_id=&lt;network-id&gt;]
: Network to associate new site with. Defaults to current network (typically 1).

[\--private]
: If set, the new site will be non-public (not indexed)

[\--porcelain]
: If set, only the site id will be output on success.



