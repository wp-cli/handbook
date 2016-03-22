---
layout: default
title: 'wp core update'
display_global_parameters: true
---

`wp core update` - Update WordPress.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aupdate+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;zip&gt;]
: Path to zip file to use, instead of downloading from wordpress.org.

[\--minor]
: Only perform updates for minor releases (e.g. update from WP 4.3 to 4.3.3 instead of 4.4.2).

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



