# wp theme mod get

Gets one or more theme mods.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[<mod>...]
: One or more mods to get.

[\--field=<field>]
: Returns the value of a single field.

[\--all]
: List all theme mods

[\--format=<format>]
: Render output in a particular format.
\---
default: table
options:
  - table
  - json
  - csv
  - yaml
\---

### EXAMPLES

    # Get all theme mods.
    $ wp theme mod get --all
    +------------------+---------+
    | key              | value   |
    +------------------+---------+
    | background_color | dd3333  |
    | link_color       | #dd9933 |
    | main_text_color  | #8224e3 |
    +------------------+---------+

    # Get single theme mod in JSON format.
    $ wp theme mod get background_color --format=json
    [{"key":"background_color","value":"dd3333"}]

    # Get value of a single theme mod.
    $ wp theme mod get background_color --field=value
    dd3333

    # Get multiple theme mods.
    $ wp theme mod get background_color header_textcolor
    +------------------+--------+
    | key              | value  |
    +------------------+--------+
    | background_color | dd3333 |
    | header_textcolor |        |
    +------------------+--------+

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
