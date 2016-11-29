---
layout: default
title: 'wp cache flush'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [cache](/commands/cache/) &raquo; flush</small>

`wp cache flush` - Flush the object cache.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acache-flush+sort%3Aupdated-desc">Github issues</a></small>

<hr />

For WordPress multisite instances using a persistent object cache,
flushing the object cache will typically flush the cache for all sites.
Beware of the performance impact when flushing the object cache in
production.

Errors if the object cache can't be flushed.

### EXAMPLES

    # Flush cache.
    $ wp cache flush
    Success: The cache was flushed.



