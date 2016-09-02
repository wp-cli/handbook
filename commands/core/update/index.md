---
layout: default
title: 'wp core update'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [core](/commands/core/) &raquo; update</small>

`wp core update` - Update WordPress.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acore-update+sort%3Aupdated-desc">Github issues</a></small>

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

    # Update WordPress
    $ wp core update
    Updating to version 4.5.2 (en_US)...
    Downloading update from https://downloads.wordpress.org/release/wordpress-4.5.2-no-content.zip...
    Unpacking the update...
    Cleaning up files...
    No files found that need cleaned up
    Success: WordPress updated successfully.

    # Update WordPress to latest version of 3.8 release
    $ wp core update --version=3.8 ../latest.zip
    Updating to version 3.8 ()...
    Unpacking the update...
    Cleaning up files...
    File removed: wp-admin/js/tags-box.js
    ...
    File removed: wp-admin/js/updates.min.
    377 files cleaned up
    Success: WordPress updated successfully.

    # Update WordPress to 3.1 forcefully
    $ wp core update --version=3.1 --force
    Updating to version 3.1 (en_US)...
    Downloading update from https://wordpress.org/wordpress-3.1.zip...
    Unpacking the update...
    Warning: Failed to fetch checksums. Please cleanup files manually.
    Success: WordPress updated successfully.



