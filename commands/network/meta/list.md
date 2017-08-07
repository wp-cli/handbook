# wp network meta list

List all metadata associated with an object.

### OPTIONS

&lt;id&gt;
: ID for the object.

[\--keys=&lt;keys&gt;]
: Limit output to metadata of specific keys.

[\--fields=&lt;fields&gt;]
: Limit the output to specific row fields. Defaults to id,meta_key,meta_value.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

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

