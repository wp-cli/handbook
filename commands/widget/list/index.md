---
layout: default
title: 'wp widget list'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [widget](/commands/widget/) &raquo; list</small>

`wp widget list` - List widgets associated with a sidebar.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Awidget-list+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;sidebar-id&gt;
: ID for the corresponding sidebar.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - ids
  - json
  - count
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each widget:

* name
* id
* position
* options

There are no optionally available fields.

### EXAMPLES

    $ wp widget list sidebar-1 --fields=name,id --format=csv
    name,id
    meta,meta-5
    search,search-3



