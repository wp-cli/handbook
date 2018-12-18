# wp i18n make-json

Extract JavaScript strings from PO files and add them to individual JSON files.

For JavaScript internationalization purposes, WordPress requires translations to be split up into one Jed-formatted JSON file per JavaScript source file.

See https://make.wordpress.org/core/2018/11/09/new-javascript-i18n-support-in-wordpress/ to learn more about WordPress JavaScript internationalization.

### OPTIONS

&lt;source&gt;
: Path to an existing PO file or a directory containing multiple PO files.

[&lt;destination&gt;]
: Path to the destination directory for the resulting JSON files. Defaults to the source directory.

[\--purge]
: Whether to purge the strings that were extracted from the original source file. Defaults to true, use `--no-purge` to skip the removal.

[\--pretty-print]
: Pretty-print resulting JSON files.

### EXAMPLES

    # Create JSON files for all PO files in the languages directory
    $ wp i18n make-json languages

    # Create JSON files for my-plugin-de_DE.po and leave the PO file untouched.
    $ wp i18n make-json my-plugin-de_DE.po /tmp --no-purge

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
