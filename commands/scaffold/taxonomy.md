# wp scaffold taxonomy

<small>[Commands](/commands/) &raquo; [scaffold](/commands/scaffold/) &raquo; taxonomy</small>

`wp scaffold taxonomy` - Generate PHP code for registering a custom taxonomy.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Ascaffold-taxonomy+sort%3Aupdated-desc">Github issues</a></small>

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

    # Generate PHP code for registering a custom taxonomy and save in a file
    $ wp scaffold taxonomy venue --post_types=event,presentation > taxonomy.php



