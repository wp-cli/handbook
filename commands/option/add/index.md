---
layout: default
title: 'wp option add'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [option](/commands/option/) &raquo; add</small>

`wp option add` - Add an option.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aoption-add+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;key&gt;
: The name of the option to add.

[&lt;value&gt;]
: The value of the option to add. If ommited, the value is read from STDIN.

[\--format=&lt;format&gt;]
: The serialization format for the value.
\---
default: plaintext
options:
  - plaintext
  - json
\---

[\--autoload=&lt;autoload&gt;]
: Should this option be automatically loaded.
\---
options:
  - 'yes'
  - 'no'
\---

### EXAMPLES

    # Create an option by reading a JSON file
    $ wp option add my_option --format=json < config.json
    Success: Added 'my_option' option.



