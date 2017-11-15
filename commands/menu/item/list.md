# wp menu item list

Get a list of items associated with a menu.

### OPTIONS

&lt;menu&gt;
: The name, slug, or term ID for the menu.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - count
  - ids
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each menu item:

* db_id
* type
* title
* link
* position

These fields are optionally available:

* menu_item_parent
* object_id
* object
* type
* type_label
* target
* attr_title
* description
* classes
* xfn

### EXAMPLES

    $ wp menu item list main-menu
    +-------+-----------+-------------+---------------------------------+----------+
    | db_id | type      | title       | link                            | position |
    +-------+-----------+-------------+---------------------------------+----------+
    | 5     | custom    | Home        | http://example.com              | 1        |
    | 6     | post_type | Sample Page | http://example.com/sample-page/ | 2        |
    +-------+-----------+-------------+---------------------------------+----------+

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress install over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors; add verbosity to WP-CLI bootstrap. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
