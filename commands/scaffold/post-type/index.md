---
layout: default
title: 'wp scaffold post-type'
---

`wp scaffold post-type` - Generate PHP code for registering a custom post type.

### OPTIONS

&lt;slug&gt;
: The internal name of the post type.

[--label=&lt;label&gt;]
: The text used to translate the update messages

[--textdomain=&lt;textdomain&gt;]
: The textdomain to use for the labels.

[--theme]
: Create a file in the active theme directory, instead of sending to
STDOUT. Specify a theme with `--theme=&lt;theme&gt;` to have the file placed in that theme.

[--plugin=&lt;plugin&gt;]
: Create a file in the given plugin's directory, instead of sending to STDOUT.

[--raw]
: Just generate the `register_post_type()` call and nothing else.

