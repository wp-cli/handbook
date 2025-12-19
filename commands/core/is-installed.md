# wp core is-installed

Checks if WordPress is installed.

Determines whether WordPress is installed by checking if the standard database tables are installed. Doesn't produce output; uses exit codes to communicate whether WordPress is installed.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--network]
: Check if this is a multisite installation.

### EXAMPLES

    # Bash script for checking if WordPress is not installed.

    if ! wp core is-installed 2>/dev/null; then
        # WP is not installed. Let's try installing it.
        wp core install
    fi

    # Bash script for checking if WordPress is installed, with fallback.

    if wp core is-installed 2>/dev/null; then
        # WP is installed. Let's do some things we should only do in a confirmed WP environment.
        wp core verify-checksums
    else
        # Fallback if WP is not installed.
        echo 'Hey Friend, you are in the wrong spot. Move in to your WordPress directory and try again.'
    fi

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
