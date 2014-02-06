---
layout: default
title: 'wp core update'
---

`wp core update` - Update WordPress.

### OPTIONS

[&lt;zip&gt;]
: Path to zip file to use, instead of downloading from wordpress.org.

[\--version=&lt;version&gt;]
: Update to this version, instead of to the latest version.

[\--force]
: Will update even when current WP version < passed version. Use with
caution.

[\--locale=&lt;locale&gt;]
: Select which language you want to download.

### EXAMPLES

    wp core update

    wp core update --version=3.4 ../latest.zip

    wp core update --version=3.1 --force

