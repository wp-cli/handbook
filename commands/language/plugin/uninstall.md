# wp language plugin uninstall

Uninstalls a given language for a plugin.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[<plugin>]
: Plugin to uninstall language for.

[\--all]
: If set, languages for all plugins will be uninstalled.

<language>...
: Language code to uninstall.

[\--format=<format>]
: Render output in a particular format. Used when installing languages for all plugins.
\---
default: table
options:
  - table
  - csv
  - json
  - summary
\---

### EXAMPLES

    # Uninstall the Japanese plugin language pack for Hello Dolly.
    $ wp language plugin uninstall hello-dolly ja
    Language 'ja' for 'hello-dolly' uninstalled.
    +-------------+--------+-------------+
    | name        | locale | status      |
    +-------------+--------+-------------+
    | hello-dolly | ja     | uninstalled |
    +-------------+--------+-------------+
    Success: Uninstalled 1 of 1 languages.

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
