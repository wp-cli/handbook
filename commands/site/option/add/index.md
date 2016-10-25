---
layout: default
title: 'wp site option add'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [site](/commands/site/) &raquo; [option](/commands/site/option/) &raquo; add</small>

`wp site option add` - Add a site option.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asite-option-add+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;key&gt;
: The name of the site option to add.

[&lt;value&gt;]
: The value of the site option to add. If ommited, the value is read from STDIN.

[\--format=&lt;format&gt;]
: The serialization format for the value.
\---
default: plaintext
options:
  - plaintext
  - json
\---

### EXAMPLES

    # Create a site option by reading a JSON file
    $ wp site option add my_option --format=json < config.json
    Success: Added 'my_option' site option.



