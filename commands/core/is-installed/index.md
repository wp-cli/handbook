---
layout: default
title: 'wp core is-installed'
display_global_parameters: true
---

`wp core is-installed` - Determine if the WordPress tables are installed.

<hr />

[\--network]
: Check if this is a multisite install

### EXAMPLES

    if ! $(wp core is-installed); then
        wp core install
    fi



