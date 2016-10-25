---
layout: default
title: 'wp option update'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [option](/commands/option/) &raquo; update</small>

`wp option update` - Update an option.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aoption-update+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;key&gt;
: The name of the option to add.

[&lt;value&gt;]
: The new value. If ommited, the value is read from STDIN.

[\--autoload=&lt;autoload&gt;]
: Requires WP 4.2. Should this option be automatically loaded.
\---
options:
  - 'yes'
  - 'no'
\---

[\--format=&lt;format&gt;]
: The serialization format for the value.
\---
default: plaintext
options:
  - plaintext
  - json
\---

### EXAMPLES

    # Update an option by reading from a file
    $ wp option update my_option < value.txt
    Success: Updated 'my_option' option.

    # Update one option on multiple sites using xargs
    $ wp site list --field=url | xargs -n1 -I {} sh -c 'wp --url={} option update my_option my_value'
    Success: Updated 'my_option' option.
    Success: Updated 'my_option' option.



