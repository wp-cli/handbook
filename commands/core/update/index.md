---
layout: default
title: 'wp core update'
display_global_parameters: true
---

`wp core update` - Update WordPress.

<hr />

### OPTIONS

[&lt;zip&gt;]
: Path to zip file to use, instead of downloading from wordpress.org.

[\--minor]
: Only perform updates for minor releases.

[\--version=&lt;version&gt;]
: Update to a specific version, instead of to the latest version.

[\--force]
: Update even when installed WP version is greater than the requested version.

[\--locale=&lt;locale&gt;]
: Select which language you want to download.

### EXAMPLES

    wp core update

    wp core update --version=3.8 ../latest.zip

    wp core update --version=3.1 --force



