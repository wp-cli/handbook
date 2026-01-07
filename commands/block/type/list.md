# wp block type list

Lists registered block types.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--namespace=<namespace>]
: Filter by block namespace (e.g., 'core', 'my-plugin').

[\--dynamic]
: Only show dynamic blocks (blocks with render_callback).

[\--static]
: Only show static blocks (blocks without render_callback).

[\--field=<field>]
: Prints the value of a single field for each block type.

[\--fields=<fields>]
: Limit the output to specific block type fields.

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

These fields will be displayed by default for each block type:

* name
* title
* description
* category
* is_dynamic

These fields are optionally available:

* icon
* keywords
* parent
* ancestor
* supports
* attributes
* provides_context
* uses_context
* block_hooks
* editor_script_handles
* script_handles
* view_script_handles
* editor_style_handles
* style_handles
* view_style_handles
* api_version

### EXAMPLES

    # List all registered block types
    $ wp block type list

    # List all core blocks
    $ wp block type list --namespace=core --fields=name,title,category

    # List only dynamic blocks
    $ wp block type list --dynamic --format=json

    # Get count of registered block types
    $ wp block type list --format=count

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
