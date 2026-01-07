# wp i18n update-po

Update PO files from a POT file.

This command runs on the `before_wp_load` hook, just before the WP load process begins.

This behaves similarly to the [msgmerge](https://www.gnu.org/software/gettext/manual/html_node/msgmerge-Invocation.html) command.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

<source>
: Path to an existing POT file to use for updating.

[<destination>]
: PO file to update or a directory containing multiple PO files.
  Defaults to all PO files in the source directory.

### EXAMPLES

    # Update all PO files from a POT file in the current directory.
    $ wp i18n update-po example-plugin.pot
    Success: Updated 3 files.

    # Update a PO file from a POT file.
    $ wp i18n update-po example-plugin.pot example-plugin-de_DE.po
    Success: Updated 1 file.

    # Update all PO files in a given directory from a POT file.
    $ wp i18n update-po example-plugin.pot languages
    Success: Updated 2 files.

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
