---
layout: default
title: 'wp plugin is-installed'
display_global_parameters: true
---

`wp plugin is-installed` - Check if the plugin is installed.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aplugin-is-installed+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Returns exit code 0 when installed, 1 when uninstalled.

### OPTIONS

&lt;plugin&gt;
: The plugin to check.

### EXAMPLES

    # Check whether plugin is installed; exit status 0 if installed, otherwise 1
    $ wp plugin is-installed hello-dolly
    $ echo $?
    1



