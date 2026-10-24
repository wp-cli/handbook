# wp icon list

Lists registered icons.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--collection=&lt;slug&gt;]
: Only list icons belonging to the given collection.

[\--search=&lt;term&gt;]
: Only list icons whose name or label matches the given term.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each icon.

[\--fields=&lt;fields&gt;]
: Limit the output to specific icon fields.

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
  - ids
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each icon:

* name
* label
* collection

These fields are optionally available:

* content
* file_path

### EXAMPLES

    # List all icons of a specific collection
    $ wp icon list --collection=core
    +-----------------+------------+------------+
    | name            | label      | collection |
    +-----------------+------------+------------+
    | core/arrow-down | Arrow Down | core       |
    | core/plus       | Plus       | core       |
    +-----------------+------------+------------+

    # Search for icons by name or label
    $ wp icon list --search=arrow-down --field=name
    core/arrow-down-left
    core/arrow-down-right
    core/arrow-down

    # Count the icons of a collection
    $ wp icon list --collection=core --format=count
    88

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
| `--ssh-args=<args>` | Pass additional arguments to SSH (or other tools specified by --ssh scheme). |
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
| `--alias=<name>` | Name of the alias to use. Aliases can reference local WordPress installations or remote SSH connections. Aliases are defined in the wp-cli.yml file. |
| `--assume-https` | Set $_SERVER['HTTPS'] to make WordPress treat the site as HTTPS. Use when WordPress is behind an HTTPS proxy or load balancer. |
