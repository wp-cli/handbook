# wp cache replace

Replace a value in the object cache, if the value already exists.

Errors if the value can't be replaced.

### OPTIONS

&lt;key&gt;
: Cache key.

&lt;value&gt;
: Value to replace.

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

    # Replace cache.
    $ wp cache replace my_key new_value my_group
    Success: Replaced object 'my_key' in group 'my_group'.

### GLOBAL PARAMETERS

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

