---
layout: default
title: 'wp term get'
display_global_parameters: true
---

`wp term get` - Get a taxonomy term

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aterm-get+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy of the term to get

&lt;term-id&gt;
: ID of the term to get

[\--field=&lt;field&gt;]
: Instead of returning the whole term, returns the value of a single field.

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

    $ wp term get category 199 --format=json
    {"term_id":199,"name":"Apple","slug":"apple","term_group":0,"term_taxonomy_id":199,"taxonomy":"category","description":"A type of fruit","parent":0,"count":0,"filter":"raw"}



