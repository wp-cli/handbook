# wp db import

Import a database from a file or from STDIN.

Runs SQL queries using `DB_HOST`, `DB_NAME`, `DB_USER` and `DB_PASSWORD` database credentials specified in wp-config.php. This does not create database by itself and only performs whatever tasks are defined in the SQL.

### OPTIONS

[&lt;file&gt;]
: The name of the SQL file to import. If '-', then reads from STDIN. If omitted, it will look for '{dbname}.sql'.

[\--skip-optimization]
: When using an SQL file, do not include speed optimization such as disabling auto-commit and key checks.

### EXAMPLES

    # Import MySQL from a file.
    $ wp db import wordpress_dbase.sql
    Success: Imported from 'wordpress_dbase.sql'.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker" or "docker-compose"). |
| `--http=<http>` | Perform operation against a remote WordPress install over HTTP. |
| `--user=<id|login|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors; add verbosity to WP-CLI bootstrap. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
