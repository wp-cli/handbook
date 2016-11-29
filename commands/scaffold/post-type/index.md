---
layout: default
title: 'wp scaffold post-type'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [scaffold](/commands/scaffold/) &raquo; post-type</small>

`wp scaffold post-type` - Generate PHP code for registering a custom post type.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Ascaffold-post-type+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;slug&gt;
: The internal name of the post type.

[\--label=&lt;label&gt;]
: The text used to translate the update messages.

[\--textdomain=&lt;textdomain&gt;]
: The textdomain to use for the labels.

[\--dashicon=&lt;dashicon&gt;]
: The dashicon to use in the menu.

[\--theme]
: Create a file in the active theme directory, instead of sending to
STDOUT. Specify a theme with `--theme=&lt;theme&gt;` to have the file placed in that theme.

[\--plugin=&lt;plugin&gt;]
: Create a file in the given plugin's directory, instead of sending to STDOUT.

[\--raw]
: Just generate the `register_post_type()` call and nothing else.

[\--force]
: Overwrite files that already exist.

### EXAMPLES

    # Generate a 'movie' post type for the 'simple-life' theme
    $ wp scaffold post-type movie --label=Movie --theme=simple-life
    Success: Created '/var/www/example.com/public_html/wp-content/themes/simple-life/post-types/movie.php'.



