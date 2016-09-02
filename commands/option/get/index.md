---
layout: default
title: 'wp option get'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [option](/commands/option/) &raquo; get</small>

`wp option get` - Get an option.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aoption-get+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;key&gt;
: Key for the option.

[\--format=&lt;format&gt;]
: Get value in a particular format.
\---
default: var_export
options:
  - var_export
  - json
  - yaml
\---

### EXAMPLES

    # Get option
    $ wp option get home
    http://example.com

    # Get option in JSON format
    $ wp option get active_plugins --format=json
    {"0":"dynamically-dynamic-sidebar\/dynamically-dynamic-sidebar.php","1":"monster-widget\/monster-widget.php","2":"show-current-template\/show-current-template.php","3":"theme-check\/theme-check.php","5":"wordpress-importer\/wordpress-importer.php"}



