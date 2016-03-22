---
layout: default
title: 'wp theme update'
display_global_parameters: true
---

`wp theme update` - Update one or more themes.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atheme-update+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;theme&gt;...]
: One or more themes to update.

[\--all]
: If set, all themes that have updates will be updated.

[\--format=&lt;format&gt;]
: Output summary as table or summary. Defaults to table.

[\--version=&lt;version&gt;]
: If set, the theme will be updated to the specified version.

[\--dry-run]
: Preview which themes would be updated.

### EXAMPLES

    wp theme update twentyeleven twentytwelve

    wp theme update --all



