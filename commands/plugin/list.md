# wp plugin list

Gets a list of plugins.

Displays a list of the plugins installed on the site with activation status, whether or not there's an update available, etc.

Use `--status=dropin` to list installed dropins (e.g. `object-cache.php`).

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

[\--status=&lt;status&gt;]
: Filter the output by plugin status.
\---
options:
  - active
  - active-network
  - dropin
  - inactive
  - must-use
\---

[\--skip-update-check]
: If set, the plugin update check will be skipped.

[\--recently-active]
: If set, only recently active plugins will be shown and the status filter will be ignored.

### AVAILABLE FIELDS

These fields will be displayed by default for each plugin:

* name
* status
* update
* version
* update_version
* auto_update

These fields are optionally available:

* update_package
* update_id
* title
* description
* file
* author
* tested_up_to
* wporg_status
* wporg_last_updated

### EXAMPLES

    # List active plugins on the site.
    $ wp plugin list --status=active --format=json
    [{"name":"dynamic-hostname","status":"active","update":"none","version":"0.4.2","update_version":"","auto_update":"off"},{"name":"tinymce-templates","status":"active","update":"none","version":"4.8.1","update_version":"","auto_update":"off"},{"name":"wp-multibyte-patch","status":"active","update":"none","version":"2.9","update_version":"","auto_update":"off"},{"name":"wp-total-hacks","status":"active","update":"none","version":"4.7.2","update_version":"","auto_update":"off"}]

    # List plugins on each site in a network.
    $ wp site list --field=url | xargs -I % wp plugin list --url=%
    +---------+----------------+-----------+---------+-----------------+------------+
    | name    | status         | update    | version | update_version | auto_update |
    +---------+----------------+-----------+---------+----------------+-------------+
    | akismet | active-network | none      | 5.3.1   |                | on          |
    | hello   | inactive       | available | 1.6     | 1.7.2          | off         |
    +---------+----------------+-----------+---------+----------------+-------------+
    +---------+----------------+-----------+---------+----------------+-------------+
    | name    | status         | update    | version | update_version | auto_update |
    +---------+----------------+-----------+---------+----------------+-------------+
    | akismet | active-network | none      | 5.3.1   |                | on          |
    | hello   | inactive       | available | 1.6     | 1.7.2          | off         |
    +---------+----------------+-----------+---------+----------------+-------------+

    # Check whether plugins are still active on WordPress.org
    $ wp plugin list --fields=name,wporg_status,wporg_last_updated
    +--------------------+--------------+--------------------+
    | name               | wporg_status | wporg_last_updated |
    +--------------------+--------------+--------------------+
    | akismet            | active       | 2023-12-11         |
    | user-switching     | active       | 2023-11-17         |
    | wordpress-importer | active       | 2023-04-28         |
    | local              |              |                    |
    +--------------------+--------------+--------------------+

    # List recently active plugins on the site.
    $ wp plugin list --recently-active --field=name --format=json
    ["akismet","bbpress","buddypress"]

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
