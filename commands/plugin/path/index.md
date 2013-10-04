---
layout: default
title: 'wp plugin path'
---

`wp plugin path` - Get the path to a plugin or to the plugin directory.

### OPTIONS

[&lt;plugin&gt;]
: The plugin to get the path to. If not set, will return the path to the
plugins directory.

[--dir]
: If set, get the path to the closest parent directory, instead of the
plugin file.

### EXAMPLES

    cd $(wp theme path)

