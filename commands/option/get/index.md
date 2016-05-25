---
layout: default
title: 'wp option get'
display_global_parameters: true
---

`wp option get` - Get an option.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aoption-get+sort%3Aupdated-desc">Github issues</a></small>

<hr />

&lt;key&gt;
: Key for the option

[\--format=&lt;format&gt;]
: Get value as var_export() or JSON. Default: var_export()

### EXAMPLES

    $ wp option get home
    http://example.com

    $ wp option get active_plugins --format=json
    {"0":"dynamically-dynamic-sidebar\/dynamically-dynamic-sidebar.php","1":"monster-widget\/monster-widget.php","2":"show-current-template\/show-current-template.php","3":"theme-check\/theme-check.php","5":"wordpress-importer\/wordpress-importer.php"}



