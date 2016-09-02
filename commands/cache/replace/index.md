---
layout: default
title: 'wp cache replace'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [cache](/commands/cache/) &raquo; replace</small>

`wp cache replace` - Replace a value in the object cache, if the value already exists.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acache-replace+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;key&gt;
: Cache key.

&lt;value&gt;
: Value to replace.

[&lt;group&gt;]
: Method for grouping data within the cache which allows the same key to be used across groups.

[&lt;expiration&gt;]
: Define how long to keep the value, in seconds. `0` means as long as possible.
\---
default: 0
\---

### EXAMPLES

    # Replace cache.
    $ wp cache replace my_key new_value my_group
    Success: Replaced object 'my_key' in group 'my_group'.



