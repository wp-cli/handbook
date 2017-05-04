# wp cache set

Set a value to the object cache, regardless of whether it already exists.

Errors if the value can't be set.

### OPTIONS

&lt;key&gt;
: Cache key.

&lt;value&gt;
: Value to set on the key.

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

    # Set cache.
    $ wp cache set my_key my_value my_group 300
    Success: Set object 'my_key' in group 'my_group'.


