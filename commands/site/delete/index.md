---
layout: default
title: 'wp site delete'
---

`wp site delete` - Delete a site in a multisite install.

### OPTIONS

[&lt;site-id&gt;]
: The id of the site to delete. If not provided, you must set the --slug parameter.

[--slug=&lt;slug&gt;]
: Path of the blog to be deleted. Subdomain on subdomain installs, directory on subdirectory installs.

[--yes]
: Answer yes to the confirmation message.

[--keep-tables]
: Delete the blog from the list, but don't drop it's tables.

