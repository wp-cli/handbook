---
layout: default
title: 'wp plugin update'
---

`wp plugin update` - Update one or more plugins.

### OPTIONS

[&lt;plugin&gt;...]
: One or more plugins to update.

[--all]
: If set, all plugins that have updates will be updated.

[--version=&lt;version&gt;]
: If set, the plugin will be updated to the latest development version,
regardless of what version is currently installed.

[--dry-run]
: Preview which plugins would be updated.

### EXAMPLES

    wp plugin update bbpress --version=dev

    wp plugin update --all

