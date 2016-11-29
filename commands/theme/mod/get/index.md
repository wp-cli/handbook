---
layout: default
title: 'wp theme mod get'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [theme](/commands/theme/) &raquo; [mod](/commands/theme/mod/) &raquo; get</small>

`wp theme mod get` - Get one or more theme mods.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atheme-mod-get+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;mod&gt;...]
: One or more mods to get.

[\--all]
: List all theme mods

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - json
  - csv
  - yaml
\---

### EXAMPLES

    # Get all theme mods
    $ wp theme mod get --all
    +------------------+---------+
    | key              | value   |
    +------------------+---------+
    | background_color | dd3333  |
    | link_color       | #dd9933 |
    | main_text_color  | #8224e3 |
    +------------------+---------+

    # Get single theme mod in JSON format
    $ wp theme mod get background_color --format=json
    [{"key":"background_color","value":"dd3333"}]

    # Get multiple theme mods
    $ wp theme mod get background_color header_textcolor
    +------------------+--------+
    | key              | value  |
    +------------------+--------+
    | background_color | dd3333 |
    | header_textcolor |        |
    +------------------+--------+



