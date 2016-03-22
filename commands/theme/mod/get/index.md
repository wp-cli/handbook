---
layout: default
title: 'wp theme mod get'
display_global_parameters: true
---

`wp theme mod get` - Get theme mod(s).

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atheme-mod-get+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;mod&gt;...]
: One or more mods to get.

[\--all]
: List all theme mods

[\--format=&lt;format&gt;]
: Accepted values: table, json. Default: table

### EXAMPLES

    wp theme mod get --all
    wp theme mod get background_color --format=json
    wp theme mod get background_color header_textcolor



