# wp rewrite list

<small>[Commands](/commands/) &raquo; [rewrite](/commands/rewrite/) &raquo; list</small>

`wp rewrite list` - Get a list of the current rewrite rules.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Arewrite-list+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--match=&lt;url&gt;]
: Show rewrite rules matching a particular URL.

[\--source=&lt;source&gt;]
: Show rewrite rules from a particular source.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to match,query,source.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - count
  - yaml
\---

### EXAMPLES

    $ wp rewrite list --format=csv
    match,query,source
    ^wp-json/?$,index.php?rest_route=/,other
    ^wp-json/(.*)?,index.php?rest_route=/$matches[1],other
    category/(.+?)/feed/(feed|rdf|rss|rss2|atom)/?$,index.php?category_name=$matches[1]&amp;feed=$matches[2],category
    category/(.+?)/(feed|rdf|rss|rss2|atom)/?$,index.php?category_name=$matches[1]&amp;feed=$matches[2],category
    category/(.+?)/embed/?$,index.php?category_name=$matches[1]&amp;embed=true,category



