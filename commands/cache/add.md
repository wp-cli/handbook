# wp cache add

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acache-add+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Add a value to the object cache.

Errors if a value already exists for the key, which means the value can't
be added.

### OPTIONS

&lt;key&gt;
: Cache key.

&lt;value&gt;
: Value to add to the key.

[&lt;group&gt;]
: Method for grouping data within the cache which allows the same key to be used across groups.
\---
default: default
\---

[&lt;expiration&gt;]
: Define how long to keep the value, in seconds. `0` means as long as possible.
\---
default: 0
\---

### EXAMPLES

    # Add cache.
    $ wp cache add my_key my_group my_value 300
    Success: Added object 'my_key' in group 'my_value'.


