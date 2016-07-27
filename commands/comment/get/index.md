---
layout: default
title: 'wp comment get'
display_global_parameters: true
---

`wp comment get` - Get a single comment.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acomment-get+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;id&gt;
: The comment to get.

[\--field=&lt;field&gt;]
: Instead of returning the whole comment, returns the value of a single field.

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

    $ wp comment get 21 --field=content
    Thanks for all the comments, everyone!



