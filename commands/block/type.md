# wp block type

Retrieves details on registered block types.

Get information on WordPress' built-in and custom block types from the WP_Block_Type_Registry.

### EXAMPLES

    # List all registered block types
    $ wp block type list

    # Get details about a specific block type
    $ wp block type get core/paragraph --format=json

    # List all core blocks
    $ wp block type list --namespace=core


