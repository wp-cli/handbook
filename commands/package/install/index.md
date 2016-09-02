---
layout: default
title: 'wp package install'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [package](/commands/package/) &raquo; install</small>

`wp package install` - Install a WP-CLI package.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Apackage-install+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;name&gt;
: Name of the package to install. Can optionally contain a version constraint.

### EXAMPLES

    # Install the latest development version
    $ wp package install wp-cli/server-command
    Installing wp-cli/server-command (dev-master)
    Updating /home/person/.wp-cli/packages/composer.json to require the package...
    Using Composer to install the package...
    ---
    Loading composer repositories with package information
    Updating dependencies
    Resolving dependencies through SAT
    Dependency resolution completed in 0.005 seconds
    Analyzed 732 packages to resolve dependencies
    Analyzed 1034 rules to resolve dependencies
     - Installing package
    Writing lock file
    Generating autoload files
    ---
    Success: Package installed successfully.

    # Install the latest stable version
    $ wp package install wp-cli/server-command:@stable



