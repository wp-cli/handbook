---
layout: default
title: 'wp package uninstall'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [package](/commands/package/) &raquo; uninstall</small>

`wp package uninstall` - Uninstall a WP-CLI package.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Apackage-uninstall+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;name&gt;
: Name of the package to uninstall.

### EXAMPLES

    $ wp package uninstall wp-cli/server-command
    Removing require statement from /home/person/.wp-cli/packages/composer.json
    Deleting package directory /home/person/.wp-cli/packages/vendor/wp-cli/server-command
    Regenerating Composer autoload.
    Success: Uninstalled package.



