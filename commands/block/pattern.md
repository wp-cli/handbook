# wp block pattern

Retrieves details on registered block patterns.

Get information on WordPress' built-in and custom block patterns from the WP_Block_Patterns_Registry.

### EXAMPLES

    # List all registered block patterns
    $ wp block pattern list

    # Get details about a specific pattern
    $ wp block pattern get core/query-standard-posts --format=json

    # List patterns in a specific category
    $ wp block pattern list --category=featured


