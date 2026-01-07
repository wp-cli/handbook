# wp ability run

Executes a registered ability.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

<name>
: The ability name (namespace/ability-name format).

[\--input=<json>]
: JSON string containing input data for the ability. Use '-' to read from stdin.

[\--<field>=<value>]
: Individual input fields. Alternative to --input for simple inputs.

[\--format=<format>]
: Render output in a particular format.
\---
default: json
options:
  - json
  - yaml
  - var_export
\---

### EXAMPLES

    # Execute an ability.
    $ wp ability run core/get-site-info --user=admin
    {
        "name": "Test Blog",
        "description": "Just another WordPress site",
        "url": "http://example.com",
        ...
    }

    # Execute an ability with JSON input (required for array values).
    $ wp ability run core/get-site-info --input='{"fields":["name","version"]}' --user=admin
    {
        "name": "Test Blog",
        "version": "6.9"
    }

    # Execute an ability with simple string arguments.
    $ wp ability run my-plugin/greet --name=World

    # Execute and output as YAML.
    $ wp ability run core/get-site-info --format=yaml --user=admin
    name: Test Blog
    description: Just another WordPress site
    ...

    # Execute with input from stdin.
    $ echo '{"fields":["name"]}' | wp ability run core/get-site-info --input=- --user=admin

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
