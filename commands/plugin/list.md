# wp plugin list

Get a list of plugins.

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: Filter results based on the value of a field.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each plugin.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - count
  - json
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each plugin:

* name
* status
* update
* version

These fields are optionally available:

* update_version
* update_package
* update_id
* title
* description

### EXAMPLES

    # List active plugins on the site.
    $ wp plugin list --status=active --format=json
    [{"name":"dynamic-hostname","status":"active","update":"none","version":"0.4.2"},{"name":"tinymce-templates","status":"active","update":"none","version":"4.4.3"},{"name":"wp-multibyte-patch","status":"active","update":"none","version":"2.4"},{"name":"wp-total-hacks","status":"active","update":"none","version":"2.0.1"}]

    # List plugins on each site in a network.
    $ wp site list --field=url | xargs -I % wp plugin list --url=%
    +---------+----------------+--------+---------+
    | name    | status         | update | version |
    +---------+----------------+--------+---------+
    | akismet | active-network | none   | 3.1.11  |
    | hello   | inactive       | none   | 1.6     |
    +---------+----------------+--------+---------+
    +---------+----------------+--------+---------+
    | name    | status         | update | version |
    +---------+----------------+--------+---------+
    | akismet | active-network | none   | 3.1.11  |
    | hello   | inactive       | none   | 1.6     |
    +---------+----------------+--------+---------+

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

