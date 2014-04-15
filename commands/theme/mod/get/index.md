---
layout: default
title: 'wp theme mod get'
---

`wp theme mod get` - Get theme mod(s).

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

