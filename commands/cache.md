# wp cache

Adds, removes, fetches, and flushes the WP Object Cache object.

By default, the WP Object Cache exists in PHP memory for the length of the request (and is emptied at the end). Use a persistent object cache drop-in to persist the object cache between requests.

[Read the codex article](https://developer.wordpress.org/reference/classes/wp_object_cache) for more detail.

### EXAMPLES

    # Set cache.
    $ wp cache set my_key my_value my_group 300
    Success: Set object 'my_key' in group 'my_group'.

    # Get cache.
    $ wp cache get my_key my_group
    my_value


