---
layout: default
title: 'wp core verify-checksums'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [core](/commands/core/) &raquo; verify-checksums</small>

`wp core verify-checksums` - Verify WordPress files against WordPress.org's checksums.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acore-verify-checksums+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Downloads md5 checksums for the current version from WordPress.org, and
compares those checksums against the currently installed files.

For security, avoids loading WordPress when verifying checksums.

### OPTIONS

[\--version=&lt;version&gt;]
: Verify checksums against a specific version of WordPress.

[\--locale=&lt;locale&gt;]
: Verify checksums against a specific locale of WordPress.

### EXAMPLES

    # Verify checksums
    $ wp core verify-checksums
    Success: WordPress install verifies against checksums.

    # Verify checksums for given WordPress version
    $ wp core verify-checksums --version=4.0
    Success: WordPress install verifies against checksums.

    # Verify checksums for given locale
    $ wp core verify-checksums --locale=en_US
    Success: WordPress install verifies against checksums.

    # Verify checksums for given locale
    $ wp core verify-checksums --locale=ja
    Warning: File doesn't verify against checksum: wp-includes/version.php
    Warning: File doesn't verify against checksum: readme.html
    Warning: File doesn't verify against checksum: wp-config-sample.php
    Error: WordPress install doesn't verify against checksums.



