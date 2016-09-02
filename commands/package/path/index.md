---
layout: default
title: 'wp package path'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [package](/commands/package/) &raquo; path</small>

`wp package path` - Get the path to an installed WP-CLI package, or the package directory.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Apackage-path+sort%3Aupdated-desc">Github issues</a></small>

<hr />

If you want to contribute to a package, this is a great way to jump to it.

### OPTIONS

[&lt;name&gt;]
: Name of the package to get the directory for.

### EXAMPLES

    # Get package path
    $ wp package path
    /home/person/.wp-cli/packages/

    # Change directory to package path
    $ cd $(wp package path) &amp;&amp; pwd
    /home/vagrant/.wp-cli/packages



