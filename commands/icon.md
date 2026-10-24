# wp icon

Manages registered SVG icons.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

Icons are registered in code with `wp_register_icon()` by WordPress core, themes, and plugins, and always belong to an icon collection. Because they only exist for the duration of a request, they cannot be created or deleted from the command line.

Icon names are namespaced with the slug of the collection they belong to, in the form `collection/icon-name`.

### EXAMPLES

    # List all registered icons
    $ wp icon list
    +-----------------+------------+------------+
    | name            | label      | collection |
    +-----------------+------------+------------+
    | core/arrow-down | Arrow Down | core       |
    | core/plus       | Plus       | core       |
    +-----------------+------------+------------+

    # Get details about a single icon
    $ wp icon get core/plus --fields=name,label,collection
    +------------+-----------+
    | Field      | Value     |
    +------------+-----------+
    | name       | core/plus |
    | label      | Plus      |
    | collection | core      |
    +------------+-----------+

    # Render an icon at a given size, ready to be embedded in a template
    $ wp icon render core/plus --size=48 --label="Add item" > plus.svg


