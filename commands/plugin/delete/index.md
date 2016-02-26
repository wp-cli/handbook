---
layout: default
title: 'wp plugin delete'
display_global_parameters: true
---

`wp plugin delete` - Delete plugin files without deactivating or uninstalling.

<hr />

### OPTIONS

&lt;plugin&gt;...
: One or more plugins to delete.

### EXAMPLES

    wp plugin delete hello

    # Delete inactive plugins
    wp plugin delete $(wp plugin list --status=inactive --field=name)



