---
layout: default
title: 'wp plugin update'
display_global_parameters: true
---

`wp plugin update` - Update one or more plugins.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aupdate+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;plugin&gt;...]
: One or more plugins to update.

[\--all]
: If set, all plugins that have updates will be updated.

[\--format=&lt;format&gt;]
: Output summary as table or summary. Defaults to table.

[\--version=&lt;version&gt;]
: If set, the plugin will be updated to the specified version.

[\--dry-run]
: Preview which plugins would be updated.

### EXAMPLES

    wp plugin update bbpress --version=dev

    wp plugin update --all



