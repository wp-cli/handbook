# wp term list

Lists terms in a taxonomy.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

<taxonomy>...
: List terms of one or more taxonomies

[\--<field>=<value>]
: Filter by one or more fields (see get_terms() $args parameter for a list of fields).

[\--field=<field>]
: Prints the value of a single field for each term.

[\--fields=<fields>]
: Limit the output to specific object fields.

[\--format=<format>]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - ids
  - json
  - count
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each term:

* term_id
* term_taxonomy_id
* name
* slug
* description
* parent
* count

These fields are optionally available:

* url

### EXAMPLES

    # List post categories
    $ wp term list category --format=csv
    term_id,term_taxonomy_id,name,slug,description,parent,count
    2,2,aciform,aciform,,0,1
    3,3,antiquarianism,antiquarianism,,0,1
    4,4,arrangement,arrangement,,0,1
    5,5,asmodeus,asmodeus,,0,1

    # List post tags
    $ wp term list post_tag --fields=name,slug
    +-----------+-------------+
    | name      | slug        |
    +-----------+-------------+
    | 8BIT      | 8bit        |
    | alignment | alignment-2 |
    | Articles  | articles    |
    | aside     | aside       |
    +-----------+-------------+

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
