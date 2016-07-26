---
layout: default
title: 'wp cache flush'
display_global_parameters: true
---

`wp cache flush` - Flush the object cache.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acache-flush+sort%3Aupdated-desc">Github issues</a></small>

<hr />

For sites using a persistent object cache, because WordPress Multisite simply adds a blog id
to the cache key, flushing cache is typically a global operation.

### EXAMPLES

    # Flush cache.
    $ wp cache flush
    Success: The cache was flushed.



