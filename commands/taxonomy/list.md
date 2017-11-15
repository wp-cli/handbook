# wp taxonomy list

List registered taxonomies.

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: Filter by one or more fields (see get_taxonomies() first parameter for a list of available fields).

[\--field=&lt;field&gt;]
: Prints the value of a single field for each taxonomy.

[\--fields=&lt;fields&gt;]
: Limit the output to specific taxonomy fields.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - count
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each term:

* name
* label
* description
* public
* hierarchical

There are no optionally available fields.

### EXAMPLES

    # List all taxonomies.
    $ wp taxonomy list --format=csv
    name,label,description,object_type,show_tagcloud,hierarchical,public
    category,Categories,,post,1,1,1
    post_tag,Tags,,post,1,,1
    nav_menu,"Navigation Menus",,nav_menu_item,,,
    link_category,"Link Categories",,link,1,,
    post_format,Format,,post,,,1

    # List all taxonomies with 'post' object type.
    $ wp taxonomy list --object_type=post --fields=name,public
    +-------------+--------+
    | name        | public |
    +-------------+--------+
    | category    | 1      |
    | post_tag    | 1      |
    | post_format | 1      |
    +-------------+--------+

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
