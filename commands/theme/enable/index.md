---
layout: default
title: 'wp theme enable'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [theme](/commands/theme/) &raquo; enable</small>

`wp theme enable` - Enable a theme in a multisite install.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atheme-enable+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;theme&gt;
: The theme to enable.

[\--network]
: If set, the theme is enabled for the entire network

[\--activate]
: If set, the theme is activated for the current site. Note that
the "network" flag has no influence on this.

### EXAMPLES

    # Enable theme
    $ wp theme enable twentysixteen
    Success: Enabled the 'Twenty Sixteen' theme.

    # Network enable theme
    $ wp theme enable twentysixteen --network
    Success: Network enabled the 'Twenty Sixteen' theme.

    # Network enable and activate theme for current site
    $ wp theme enable twentysixteen --activate
    Success: Enabled the 'Twenty Sixteen' theme.
    Success: Switched to 'Twenty Sixteen' theme.



