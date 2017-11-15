# wp site delete

Delete a site in a multisite install.

### OPTIONS

[&lt;site-id&gt;]
: The id of the site to delete. If not provided, you must set the --slug parameter.

[\--slug=&lt;slug&gt;]
: Path of the blog to be deleted. Subdomain on subdomain installs, directory on subdirectory installs.

[\--yes]
: Answer yes to the confirmation message.

[\--keep-tables]
: Delete the blog from the list, but don't drop it's tables.

### EXAMPLES

    $ wp site delete 123
    Are you sure you want to delete the http://www.example.com/example site? [y/n] y
    Success: The site at 'http://www.example.com/example' was deleted.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress install over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors; add verbosity to WP-CLI bootstrap. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
