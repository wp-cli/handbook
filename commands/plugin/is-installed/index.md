---
layout: default
title: 'wp plugin is-installed'
display_global_parameters: true
---

`wp plugin is-installed` - Check if the plugin is installed.

<hr />

Returns exit code 0 when installed, 1 when uninstalled.

### OPTIONS

&lt;plugin&gt;
: The plugin to check.

### EXAMPLES

    wp plugin is-installed hello
    echo $? # displays 0 or 1



