# wp block synced-pattern create

Creates a synced pattern.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--title=&lt;title&gt;]
: The pattern title.

[\--slug=&lt;slug&gt;]
: The pattern slug. Default: sanitized title.

[\--content=&lt;content&gt;]
: The block content.

[\--sync-status=&lt;status&gt;]
: Sync status.
\---
default: synced
options:
  - synced
  - unsynced
\---

[\--status=&lt;status&gt;]
: Post status.
\---
default: publish
\---

[&lt;file&gt;]
: Read content from file. Pass '-' for STDIN.

[\--porcelain]
: Output only the new pattern ID.

### EXAMPLES

    # Create a synced pattern from content
    $ wp block synced-pattern create --title="My Hero" --content='&lt;!-- wp:paragraph --&gt;&lt;p&gt;Hello&lt;/p&gt;&lt;!-- /wp:paragraph --&gt;'

    # Create from file
    $ wp block synced-pattern create --title="Header" header.html

    # Create an unsynced pattern
    $ wp block synced-pattern create --title="Footer" --sync-status=unsynced footer.html

    # Create from STDIN
    $ cat content.html | wp block synced-pattern create --title="From STDIN" -

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
