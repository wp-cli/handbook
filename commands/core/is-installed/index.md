---
layout: default
title: 'wp core is-installed'
---

`wp core is-installed` - Determine if the WordPress tables are installed.

### EXAMPLES

    if ! $(wp core is-installed); then
        wp core install
    fi

