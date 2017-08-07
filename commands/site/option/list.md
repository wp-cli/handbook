# wp site option list

List site options.

### OPTIONS

[\--search=&lt;pattern&gt;]
: Use wildcards ( * and ? ) to match option name.

[\--site_id=&lt;id&gt;]
: Limit options to those of a particular site id.

[\--field=&lt;field&gt;]
: Prints the value of a single field.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: The serialization format for the value. total_bytes displays the total size of matching options in bytes.
\---
default: table
options:
  - table
  - json
  - csv
  - count
  - yaml
  - total_bytes
\---

### AVAILABLE FIELDS

This field will be displayed by default for each matching option:

* meta_key
* meta_value

These fields are optionally available:

* meta_id
* site_id
* size_bytes

### EXAMPLES

    # List all site options begining with "i2f_"
    $ wp site option list --search="i2f_*"
    +-------------+--------------+
    | meta_key    | meta_value   |
    +-------------+--------------+
    | i2f_version | 0.1.0        |
    +-------------+--------------+

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

