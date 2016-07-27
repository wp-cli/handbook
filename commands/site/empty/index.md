---
layout: default
title: 'wp site empty'
display_global_parameters: true
---

`wp site empty` - Empty a site of its content (posts, comments, and terms).

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asite-empty+sort%3Aupdated-desc">Github issues</a></small>

<hr />

This command doesn't empty custom database tables by default. To do so,
you'll need to hook into command execution:

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



