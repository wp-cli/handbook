---
layout: default
title: 'wp core download'
display_global_parameters: true
---

`wp core download` - Download core WordPress files.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acore-download+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--path=&lt;path&gt;]
: Specify the path in which to install WordPress.

[\--locale=&lt;locale&gt;]
: Select which language you want to download.

[\--version=&lt;version&gt;]
: Select which version you want to download. Accepts a version number, 'latest' or 'nightly'

[\--force]
: Overwrites existing files, if present.

### EXAMPLES

    $ wp core download --locale=nl_NL
    Downloading WordPress 4.5.2 (nl_NL)...
    md5 hash verified: c5366d05b521831dd0b29dfc386e56a5
    Success: WordPress downloaded.



