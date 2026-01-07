# wp block template list

Lists block templates or template parts.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--type=<type>]
: Template type.
\---
default: wp_template
options:
  - wp_template
  - wp_template_part
\---

[\--slug=<slug>]
: Filter by template slug(s). Accepts a single slug or comma-separated list.

[\--area=<area>]
: For template parts, filter by area (header, footer, sidebar, uncategorized).

[\--post-type=<post-type>]
: Filter templates by post type they apply to.

[\--source=<source>]
: Filter by source (theme, plugin, custom).

[\--field=<field>]
: Prints the value of a single field for each template.

[\--fields=<fields>]
: Limit the output to specific template fields.

[\--format=<format>]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - count
  - yaml
  - ids
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each template:

* id
* slug
* title
* source
* type

These fields are optionally available:

* theme
* description
* status
* origin
* is_custom
* has_theme_file
* author
* area (template parts only)
* content

### EXAMPLES

    # List all templates
    $ wp block template list

    # List template parts for the header area
    $ wp block template list --type=wp_template_part --area=header

    # List templates from the theme
    $ wp block template list --source=theme

    # List specific templates by slug
    $ wp block template list --slug=single,archive

    # List templates for a specific post type
    $ wp block template list --post-type=page

    # Export templates as JSON
    $ wp block template list --format=json

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
