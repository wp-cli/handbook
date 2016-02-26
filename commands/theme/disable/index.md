---
layout: default
title: 'wp theme disable'
display_global_parameters: true
---

`wp theme disable` - Disable a theme in a multisite install.

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



