---
layout: default
title: 'wp core is-installed'
display_global_parameters: true
---

`wp core is-installed` - Determine if the WordPress tables are installed.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acore-is-installed+sort%3Aupdated-desc">Github issues</a></small>

<hr />

[\--network]
: Check if this is a multisite install

### EXAMPLES

    if ! $(wp core is-installed); then
        wp core install
    fi



