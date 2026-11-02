# wp block pattern-category

Retrieves details on registered block pattern categories.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

Get information on block pattern categories from the WP_Block_Pattern_Categories_Registry.

### EXAMPLES

    # List all registered pattern categories
    $ wp block pattern-category list

    # Get details about a specific category
    $ wp block pattern-category get featured --format=json


