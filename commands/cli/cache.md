# wp cli cache

Manages the internal WP-CLI cache,.

Unless overridden, these commands run on the `before_wp_load` hook, just before the WP load process begins.

### EXAMPLES

    # Remove all cached files.
    $ wp cli cache clear
    Success: Cache cleared.

    # Remove all cached files except for the newest version of each one.
    $ wp cli cache prune
    Success: Cache pruned.




