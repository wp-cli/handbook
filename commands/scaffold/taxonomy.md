# wp scaffold taxonomy

Generates PHP code for registering a custom taxonomy.

**Alias:** `tax`

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

<slug>
: The internal name of the taxonomy.

[\--post_types=<post-types>]
: Post types to register for use with the taxonomy.

[\--label=<label>]
: The text used to translate the update messages.

[\--textdomain=<textdomain>]
: The textdomain to use for the labels.

[\--theme[=<theme>]]
: Create a file in the active theme directory, instead of sending to STDOUT. Specify a theme with `--theme=<theme>` to have the file placed in that theme.

[\--plugin=<plugin>]
: Create a file in the given plugin's directory, instead of sending to STDOUT.

[\--raw]
: Just generate the `register_taxonomy()` call and nothing else.

[\--force]
: Overwrite files that already exist.

### EXAMPLES

    # Generate PHP code for registering a custom taxonomy and save in a file
    $ wp scaffold taxonomy venue --post_types=event,presentation > taxonomy.php

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
