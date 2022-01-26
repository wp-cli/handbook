# wp term recount

Recalculates number of posts assigned to each term.

In instances where manual updates are made to the terms assigned to posts in the database, the number of posts associated with a term can become out-of-sync with the actual number of posts.

This command runs wp_update_term_count() on the taxonomy's terms to bring the count back to the correct value.

### OPTIONS

&lt;taxonomy&gt;...
: One or more taxonomies to recalculate.

### EXAMPLES

    # Recount posts assigned to each categories and tags
    $ wp term recount category post_tag
    Success: Updated category term count.
    Success: Updated post_tag term count.

    # Recount all listed taxonomies
    $ wp taxonomy list --field=name | xargs wp term recount
    Success: Updated category term count.
    Success: Updated post_tag term count.
    Success: Updated nav_menu term count.
    Success: Updated link_category term count.
    Success: Updated post_format term count.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**			  |
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
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
