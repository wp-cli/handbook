---
layout: default
title: 'wp theme is-installed'
display_global_parameters: true
---

`wp theme is-installed` - Check if the theme is installed.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Ais-installed+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Returns exit code 0 when installed, 1 when uninstalled.

### OPTIONS

&lt;theme&gt;
: The theme to check.

### EXAMPLES

    wp theme is-installed twentytwelve
    echo $? # displays 0 or 1



