# wp transient set

Set a transient value.

`&lt;expiration&gt;` is the time until expiration, in seconds.

### OPTIONS

&lt;key&gt;
: Key for the transient.

&lt;value&gt;
: Value to be set for the transient.

[&lt;expiration&gt;]
: Time until expiration, in seconds.

[\--network]
: Set the transient value on the network, instead of single site.

### EXAMPLES

    $ wp transient set sample_key "test data" 3600
    Success: Transient added.

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

