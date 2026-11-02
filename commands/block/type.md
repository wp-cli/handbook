# wp block type

Retrieves details on registered block types.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

Get information on WordPress' built-in and custom block types from the WP_Block_Type_Registry.

### EXAMPLES

    # List all registered block types
    $ wp block type list

    # Get details about a specific block type
    $ wp block type get core/paragraph --format=json

    # List all core blocks
    $ wp block type list --namespace=core


