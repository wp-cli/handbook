---
layout: default
title: 'wp package install'
display_global_parameters: true
---

`wp package install` - Install a WP-CLI package.

<hr />

### OPTIONS

&lt;name&gt;
: Name of the package to install. Can optionally contain a version constraint.

### EXAMPLES

    # install the latest development version
    wp package install wp-cli/server-command

    # install the latest stable version
    wp package install wp-cli/server-command:@stable



