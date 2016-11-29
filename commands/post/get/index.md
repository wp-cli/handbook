---
layout: default
title: 'wp post get'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [post](/commands/post/) &raquo; get</small>

`wp post get` - Get details about a post.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Apost-get+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;id&gt;
: The ID of the post to get.

[\--field=&lt;field&gt;]
: Instead of returning the whole post, returns the value of a single field.

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

    # Save the post content to a file
    $ wp post get 123 --field=content > file.txt



