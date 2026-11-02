# wp block pattern

Retrieves details on registered block patterns.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

Get information on WordPress' built-in and custom block patterns from the WP_Block_Patterns_Registry.

### EXAMPLES

    # List all registered block patterns
    $ wp block pattern list

    # Get details about a specific pattern
    $ wp block pattern get core/query-standard-posts --format=json

    # List patterns in a specific category
    $ wp block pattern list --category=featured


