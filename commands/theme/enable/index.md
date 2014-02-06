---
layout: default
title: 'wp theme enable'
---

`wp theme enable` - Enable a theme in a multisite install.

### OPTIONS

&lt;theme&gt;
: The theme to enable.

[\--network]
: If set, the theme is enabled for the entire network

[\--activate]
: If set, the theme is activated for the current site. Note that
the &quot;network&quot; flag has no influence on this.

### EXAMPLES

    wp theme enable twentythirteen

    wp theme enable twentythirteen --network

    wp theme enable twentythirteen --activate

