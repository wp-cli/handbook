---
layout: default
title: 'wp site delete'
display_global_parameters: true
---

`wp site delete` - Delete a site in a multisite install.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asite-delete+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;site-id&gt;]
: The id of the site to delete. If not provided, you must set the --slug parameter.

[\--slug=&lt;slug&gt;]
: Path of the blog to be deleted. Subdomain on subdomain installs, directory on subdirectory installs.

[\--yes]
: Answer yes to the confirmation message.

[\--keep-tables]
: Delete the blog from the list, but don't drop it's tables.



