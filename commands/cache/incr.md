# wp cache incr

Increment a value in the object cache.

Errors if the value can't be incremented.

### OPTIONS

&lt;key&gt;
: Cache key.

[&lt;offset&gt;]
: The amount by which to increment the item's value.
\---
default: 1
\---

[&lt;group&gt;]
: Method for grouping data within the cache which allows the same key to be used across groups.
\---
default: default
\---

### EXAMPLES

    # Increase cache value.
    $ wp cache incr my_key 2 my_group
    50

### GLOBAL PARAMETERS

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

