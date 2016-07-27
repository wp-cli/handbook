---
layout: default
title: 'wp plugin delete'
display_global_parameters: true
---

`wp plugin delete` - Delete plugin files without deactivating or uninstalling.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aplugin-delete+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;plugin&gt;...
: One or more plugins to delete.

### EXAMPLES

    # Delete plugin
    $ wp plugin delete hello
    Success: Deleted 'hello' plugin.

    # Delete inactive plugins
    $ wp plugin delete $(wp plugin list --status=inactive --field=name)
    Success: Deleted 'tinymce-templates' plugin.



