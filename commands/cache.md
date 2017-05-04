# wp cache

Manage the object cache.

Use a persistent object cache drop-in to persist cache values between requests.

### EXAMPLES

    # Set cache.
    $ wp cache set my_key my_value my_group 300
    Success: Set object 'my_key' in group 'my_group'.

    # Get cache.
    $ wp cache get my_key my_group
    my_value


