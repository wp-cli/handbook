---
layout: default
title: 'wp rewrite flush'
display_global_parameters: true
---

`wp rewrite flush` - Flush rewrite rules.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aflush+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### DESCRIPTION

Resets WordPress' rewrite rules based on registered post types, etc.

To regenerate a .htaccess file with WP-CLI, you'll need to add the mod_rewrite module
to your wp-cli.yml or config.yml. For example:

`apache_modules:
  - mod_rewrite`

### OPTIONS

[\--hard]
: Perform a hard flush - update `.htaccess` rules as well as rewrite rules in database. Works only on single site installs.



