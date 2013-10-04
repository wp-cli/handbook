---
layout: default
title: 'wp theme update'
---

`wp theme update` - Update one or more themes.

### OPTIONS

[&lt;theme&gt;...]
: One or more themes to update.

[--all]
: If set, all themes that have updates will be updated.

[--version=&lt;version&gt;]
: If set, the theme will be updated to the latest development version,
regardless of what version is currently installed.

[--dry-run]
: Preview which themes would be updated.

### EXAMPLES

    wp theme update twentyeleven twentytwelve

    wp theme update --all

