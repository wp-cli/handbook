# wp post-type list

List registered post types.

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: Filter by one or more fields (see get_post_types() first parameter for a list of available fields).

[\--field=&lt;field&gt;]
: Prints the value of a single field for each post type.

[\--fields=&lt;fields&gt;]
: Limit the output to specific post type fields.

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
* hierarchical
* public
* capability_type

There are no optionally available fields.

### EXAMPLES

    # List registered post types
    $ wp post-type list --format=csv
    name,label,description,hierarchical,public,capability_type
    post,Posts,,,1,post
    page,Pages,,1,1,page
    attachment,Media,,,1,post
    revision,Revisions,,,,post
    nav_menu_item,"Navigation Menu Items",,,,post

    # List post types with 'post' capability type
    $ wp post-type list --capability_type=post --fields=name,public
    +---------------+--------+
    | name          | public |
    +---------------+--------+
    | post          | 1      |
    | attachment    | 1      |
    | revision      |        |
    | nav_menu_item |        |
    +---------------+--------+

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

