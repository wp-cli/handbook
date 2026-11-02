# wp icon collection

Manages icon collections.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

Icon collections group registered SVG icons by source, and act as the namespace of the icons belonging to them. WordPress core registers the `core` collection, while themes and plugins register their own with `wp_register_icon_collection()`. Because collections only exist for the duration of a request, they cannot be created or deleted from the command line.

### EXAMPLES

    # List all icon collections
    $ wp icon collection list
    +------+-----------+--------------------------+-------+
    | slug | label     | description              | count |
    +------+-----------+--------------------------+-------+
    | core | WordPress | Default icon collection. | 88    |
    +------+-----------+--------------------------+-------+

    # List the icons of a collection
    $ wp icon list --collection=core




