# wp block binding

Retrieves details on registered block binding sources.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

Get information on block binding sources from the WP_Block_Bindings_Registry. Block bindings allow dynamic data to be connected to block attributes.

### EXAMPLES

    # List all registered binding sources
    $ wp block binding list

    # Get details about the post-meta binding
    $ wp block binding get core/post-meta --format=json


