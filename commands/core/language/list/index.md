---
layout: default
title: 'wp core language list'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [core](/commands/core/) &raquo; [language](/commands/core/language/) &raquo; list</small>

`wp core language list` - List all languages available.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acore-language-list+sort%3Aupdated-desc">Github issues</a></small>

<hr />

[\--field=&lt;field&gt;]
: Display the value of a single field

[\--&lt;field&gt;=&lt;value&gt;]
: Filter results by key=value pairs.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json. Default: table

### AVAILABLE FIELDS

These fields will be displayed by default for each translation:

* language
* english_name
* native_name
* status
* update
* updated

These fields are optionally available:

* version
* package

### EXAMPLES

    $ wp core language list --fields=language,english_name,status
    +----------------+-------------------------+-------------+
    | language       | english_name            | status      |
    +----------------+-------------------------+-------------+
    | ar             | Arabic                  | uninstalled |
    | ary            | Moroccan Arabic         | uninstalled |
    | az             | Azerbaijani             | uninstalled |



