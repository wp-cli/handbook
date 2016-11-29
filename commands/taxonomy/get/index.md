---
layout: default
title: 'wp taxonomy get'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [taxonomy](/commands/taxonomy/) &raquo; get</small>

`wp taxonomy get` - Get details about a registered taxonomy.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Ataxonomy-get+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy slug.

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

    # Get details of `category` taxonomy.
    $ wp taxonomy get category --fields=name,label,object_type
    +-------------+------------+
    | Field       | Value      |
    +-------------+------------+
    | name        | category   |
    | label       | Categories |
    | object_type | ["post"]   |
    +-------------+------------+

    # Get capabilities of 'post_tag' taxonomy.
    $ wp taxonomy get post_tag --field=cap
    {"manage_terms":"manage_categories","edit_terms":"manage_categories","delete_terms":"manage_categories","assign_terms":"edit_posts"}



