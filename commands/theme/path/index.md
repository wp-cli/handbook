---
layout: default
title: 'wp theme path'
---

`wp theme path` - Get the path to a theme or to the theme directory.

### OPTIONS

[&lt;theme&gt;]
: The theme to get the path to. Path includes &quot;style.css&quot; file.
If not set, will return the path to the themes directory.

[\--dir]
: If set, get the path to the closest parent directory, instead of the
theme's &quot;style.css&quot; file.

### EXAMPLES

    cd $(wp theme path)

