---
layout: default
title: 'wp term meta update'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [term](/commands/term/) &raquo; [meta](/commands/term/meta/) &raquo; update</small>

`wp term meta update` - Update a meta field.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aterm-meta-update+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;id&gt;
: The ID of the object.

&lt;key&gt;
: The name of the meta field to update.

[&lt;value&gt;]
: The new value. If omitted, the value is read from STDIN.

[\--format=&lt;format&gt;]
: The serialization format for the value.
\---
default: plaintext
options:
  - plaintext
  - json
\---



