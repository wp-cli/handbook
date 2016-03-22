---
layout: default
title: 'wp theme is-installed'
display_global_parameters: true
---

`wp theme is-installed` - Check if the theme is installed.

<hr />

Returns exit code 0 when installed, 1 when uninstalled.

### OPTIONS

&lt;theme&gt;
: The theme to check.

### EXAMPLES

    wp theme is-installed twentytwelve
    echo $? # displays 0 or 1



