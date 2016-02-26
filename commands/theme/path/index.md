---
layout: default
title: 'wp theme path'
display_global_parameters: true
---

`wp theme path` - Get the path to a theme or to the theme directory.

<hr />

### OPTIONS

[&lt;theme&gt;]
: The theme to get the path to. Path includes "style.css" file.
If not set, will return the path to the themes directory.

[\--dir]
: If set, get the path to the closest parent directory, instead of the
theme's "style.css" file.

### EXAMPLES

    cd $(wp theme path)



