---
layout: default
title: 'wp post-type get'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [post-type](/commands/post-type/) &raquo; get</small>

`wp post-type get` - Get details about a registered post type.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Apost-type-get+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;post-type&gt;
: Post type slug

[\--field=&lt;field&gt;]
: Instead of returning the whole taxonomy, returns the value of a single field.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to all fields.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - yaml
\---

### EXAMPLES

    # Get details about the 'page' post type.
    $ wp post-type get page --fields=name,label,hierarchical --format=json
    {"name":"page","label":"Pages","hierarchical":true}



