---
layout: default
title: 'wp cache add'
display_global_parameters: true
---

`wp cache add` - Add a value to the object cache.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acache-add+sort%3Aupdated-desc">Github issues</a></small>

<hr />

If a value already exists for the key, the value isn't added.

### OPTIONS

&lt;key&gt;
: Cache key.

&lt;value&gt;
: Value to add to the key.

[&lt;group&gt;]
: Method for grouping data within the cache which allows the same key to be used across groups.

[&lt;expiration&gt;]
: Define how long to keep the value, in seconds. Defaults to 0 (as long as possible).



