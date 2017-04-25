# wp site empty

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asite-empty+sort%3Aupdated-desc">Github issues</a></small>

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



