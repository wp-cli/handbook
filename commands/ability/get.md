# wp ability get

Gets details about a registered ability.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

<name>
: The ability name (namespace/ability-name format).

[\--field=<field>]
: Instead of returning the whole ability, returns the value of a single field.

[\--fields=<fields>]
: Limit the output to specific fields. Defaults to all fields.

[\--format=<format>]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - yaml
\---

### AVAILABLE FIELDS

* name
* label
* category
* description
* input_schema
* output_schema
* readonly
* destructive
* idempotent
* show_in_rest

### EXAMPLES

    # Get details of a specific ability.
    $ wp ability get core/get-site-info
    +---------------+----------------------+
    | Field         | Value                |
    +---------------+----------------------+
    | name          | core/get-site-info   |
    | label         | Get Site Information |
    | category      | site                 |
    | description   | Returns site info... |
    | input_schema  | {"type":"object"}    |
    | output_schema | {"type":"object"}    |
    | readonly      | 1                    |
    | destructive   | 0                    |
    | idempotent    | 1                    |
    | show_in_rest  | 1                    |
    +---------------+----------------------+

    # Get ability as JSON.
    $ wp ability get core/get-site-info --format=json

    # Get only the description.
    $ wp ability get core/get-site-info --field=description
    Returns site information configured in WordPress.

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
