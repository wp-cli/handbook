# wp site empty

Empty a site of its content (posts, comments, terms, and meta).

Truncates posts, comments, and terms tables to empty a site of its
content. Doesn't affect site configuration (options) or users.

If running a persistent object cache, make sure to flush the cache
after emptying the site, as the cache values will be invalid otherwise.

To also empty custom database tables, you'll need to hook into command
execution:

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
: Also delete *all* files in the site's in the uploads directory.

[\--yes]
: Proceed to empty the site without a confirmation prompt.

### EXAMPLES

    $ wp site empty
    Are you sure you want to empty the site at http://www.example.com of all posts, comments, and terms? [y/n] y
    Success: The site at 'http://www.example.com' was emptied.

### GLOBAL PARAMETERS

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

