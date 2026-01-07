# wp ability list

Lists all registered abilities.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--category=<slug>]
: Filter abilities by category slug.

[\--namespace=<prefix>]
: Filter abilities by namespace prefix (e.g., 'core' for 'core/*' abilities).

[\--show-in-rest=<bool>]
: Filter abilities by REST API exposure.

[\--field=<field>]
: Prints the value of a single field for each ability.

[\--fields=<fields>]
: Limit the output to specific ability fields.

[\--format=<format>]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - yaml
  - count
  - ids
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each ability:

* name
* label
* category
* description

These fields are optionally available:

* readonly
* destructive
* idempotent
* show_in_rest

### EXAMPLES

    # List all abilities.
    $ wp ability list
    +---------------------------+----------------------+----------+------------------------------------------+
    | name                      | label                | category | description                              |
    +---------------------------+----------------------+----------+------------------------------------------+
    | core/get-site-info        | Get Site Information | site     | Returns site information configured i... |
    | core/get-user-info        | Get User Information | user     | Returns basic profile details for the... |
    +---------------------------+----------------------+----------+------------------------------------------+

    # List abilities in a specific category.
    $ wp ability list --category=site

    # List abilities by namespace.
    $ wp ability list --namespace=core

    # List abilities exposed to REST API.
    $ wp ability list --show-in-rest=true

    # List abilities as JSON.
    $ wp ability list --format=json

    # List only ability names.
    $ wp ability list --field=name
    core/get-site-info
    core/get-user-info
    core/get-environment-info

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
