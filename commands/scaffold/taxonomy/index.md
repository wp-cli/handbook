---
layout: default
title: 'wp scaffold taxonomy'
display_global_parameters: true
---

`wp scaffold taxonomy` - Generate PHP code for registering a custom taxonomy.

<hr />

### OPTIONS

&lt;slug&gt;
: The internal name of the taxonomy.

[\--post_types=&lt;post-types&gt;]
: Post types to register for use with the taxonomy.

[\--label=&lt;label&gt;]
: The text used to translate the update messages.

[\--textdomain=&lt;textdomain&gt;]
: The textdomain to use for the labels.

[\--theme]
: Create a file in the active theme directory, instead of sending to
STDOUT. Specify a theme with `--theme=&lt;theme&gt;` to have the file placed in that theme.

[\--plugin=&lt;plugin&gt;]
: Create a file in the given plugin's directory, instead of sending to STDOUT.

[\--raw]
: Just generate the `register_taxonomy()` call and nothing else.

[\--force]
: Overwrite files that already exist.

### EXAMPLES

    wp scaffold taxonomy venue --post_types=event,presentation



