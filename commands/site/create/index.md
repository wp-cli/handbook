---
layout: default
title: 'wp site create'
---

`wp site create` - Create a site in a multisite install.

### OPTIONS

--slug=&lt;slug&gt;
: Path for the new site. Subdomain on subdomain installs, directory on subdirectory installs.

--title=&lt;title&amp;gt;
: Title of the new site. Default: prettified slug.

--email=&lt;email&gt;
: Email for Admin user. User will be created if none exists. Assignement to Super Admin if not included.

--network_id=&lt;network-id&gt;
: Network to associate new site with. Defaults to current network (typically 1).

--private
: If set, the new site will be non-public (not indexed)

--porcelain
: If set, only the site id will be output on success.

