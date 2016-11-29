---
layout: default
title: 'wp plugin delete'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [plugin](/commands/plugin/) &raquo; delete</small>

`wp plugin delete` - Delete plugin files without deactivating or uninstalling.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aplugin-delete+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;plugin&gt;...
: One or more plugins to delete.

### EXAMPLES

    # Delete plugin
    $ wp plugin delete hello
    Deleted 'hello' plugin.
    Success: Deleted 1 of 1 plugins.

    # Delete inactive plugins
    $ wp plugin delete $(wp plugin list --status=inactive --field=name)
    Deleted 'tinymce-templates' plugin.
    Success: Deleted 1 of 1 plugins.



