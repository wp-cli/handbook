# wp site empty

Empties a site of its content (posts, comments, terms, and meta).

Truncates posts, comments, and terms tables to empty a site of its content. Doesn't affect site configuration (options) or users.

If running a persistent object cache, make sure to flush the cache after emptying the site, as the cache values will be invalid otherwise.

To also empty custom database tables, you'll need to hook into command execution:

```
WP_CLI::add_hook( 'after_invoke:site empty', function(){
    global $wpdb;
    foreach( array( 'p2p', 'p2pmeta' ) as $table ) {
        $table = $wpdb-&gt;$table;
        $wpdb-&gt;query( "TRUNCATE $table" );
    }
});
```

### OPTIONS

[\--uploads]
: Also delete *all* files in the site's uploads directory.

[\--yes]
: Proceed to empty the site without a confirmation prompt.

### EXAMPLES

    $ wp site empty
    Are you sure you want to empty the site at http://www.example.com of all posts, links, comments, and terms? [y/n] y
    Success: The site at 'http://www.example.com' was emptied.

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
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
