# wp rewrite

Manage rewrite rules.

### EXAMPLES

    # Flush rewrite rules
    $ wp rewrite flush
    Success: Rewrite rules flushed.

    # Update permalink structure
    $ wp rewrite structure '/%year%/%monthnum%/%postname%'
    Success: Rewrite structure set.

    # List rewrite rules
    $ wp rewrite list --format=csv
    match,query,source
    ^wp-json/?$,index.php?rest_route=/,other
    ^wp-json/(.*)?,index.php?rest_route=/$matches[1],other
    category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$,index.php?category_name=$matches[1]&amp;feed=$matches[2],category
    category/(.+?)/(feed|rdf|rss|rss2|atom)/?$,index.php?category_name=$matches[1]&amp;feed=$matches[2],category
    category/(.+?)/embed/?$,index.php?category_name=$matches[1]&amp;embed=true,category


