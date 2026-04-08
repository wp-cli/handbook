# wp post block export

Exports block content to a file.

Exports blocks from a post to a file for backup or migration.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;id&gt;
: The ID of the post to export blocks from.

[\--file=&lt;file&gt;]
: Output file path. If not specified, outputs to STDOUT.

[\--format=&lt;format&gt;]
: Export format.
\---
default: json
options:
  - json
  - yaml
  - html
\---

[\--raw]
: Include innerHTML in JSON/YAML output.

### EXAMPLES

    # Export blocks to a JSON file for backup.
    $ wp post block export 123 --file=blocks.json
    Success: Exported 5 blocks to blocks.json

    # Export blocks to STDOUT as JSON.
    $ wp post block export 123
    {
        "version": "1.0",
        "generator": "wp-cli/entity-command",
        "post_id": 123,
        "exported_at": "2024-12-10T12:00:00+00:00",
        "blocks": [...]
    }

    # Export as YAML format.
    $ wp post block export 123 --format=yaml
    version: "1.0"
    generator: wp-cli/entity-command
    blocks:
      - blockName: core/paragraph
        attrs: []

    # Export rendered HTML (final output, not block structure).
    $ wp post block export 123 --format=html --file=content.html
    Success: Exported 5 blocks to content.html

    # Export with raw innerHTML included for complete backup.
    $ wp post block export 123 --raw --file=blocks-full.json
    Success: Exported 5 blocks to blocks-full.json

    # Pipe export to another command.
    $ wp post block export 123 | jq '.blocks[].blockName'

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
