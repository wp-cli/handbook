# wp cache

Manipulates the WP Object Cache.

Use a persistent [object cache](https://codex.wordpress.org/Class_Reference/WP_Object_Cache) drop-in to persist cache values between requests.

### Examples

    # Set cache.
    $ wp cache set my_key my_value my_group 300
    Success: Set object 'my_key' in group 'my_group'.

    # Get cache.
    $ wp cache get my_key my_group
    my_value
