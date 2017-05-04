# wp option get

Get the value for an option.

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

    # Get option.
    $ wp option get home
    http://example.com

    # Get option in JSON format.
    $ wp option get active_plugins --format=json
    {"0":"dynamically-dynamic-sidebar\/dynamically-dynamic-sidebar.php","1":"monster-widget\/monster-widget.php","2":"show-current-template\/show-current-template.php","3":"theme-check\/theme-check.php","5":"wordpress-importer\/wordpress-importer.php"}


