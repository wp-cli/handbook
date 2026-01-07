# wp block pattern list

Lists registered block patterns.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--category=<category>]
: Filter by pattern category.

[\--search=<search>]
: Search patterns by title or keywords.

[\--inserter]
: Only show patterns visible in the inserter.

[\--field=<field>]
: Prints the value of a single field for each pattern.

[\--fields=<fields>]
: Limit the output to specific pattern fields.

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

These fields will be displayed by default for each pattern:

* name
* title
* description
* categories

These fields are optionally available:

* content
* keywords
* blockTypes
* postTypes
* templateTypes
* inserter
* viewportWidth

### EXAMPLES

    # List all registered patterns
    $ wp block pattern list

    # List patterns in the 'buttons' category
    $ wp block pattern list --category=buttons

    # Search for hero patterns
    $ wp block pattern list --search=hero

    # Export all patterns to JSON
    $ wp block pattern list --format=json > patterns.json

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
