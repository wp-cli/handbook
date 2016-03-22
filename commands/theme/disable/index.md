---
layout: default
title: 'wp theme disable'
display_global_parameters: true
---

`wp theme disable` - Disable a theme in a multisite install.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atheme-disable+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;theme&gt;
: The theme to disable.

[\--network]
: If set, the theme is disabled on the network level. Note that
individual sites may still have this theme enabled if it was
enabled for them independently.

### EXAMPLES

    wp theme disable twentythirteen

    wp theme disable twentythirteen --network



