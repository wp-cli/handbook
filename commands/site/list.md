# wp site list

<small>[Commands](/commands/) &raquo; [site](/commands/site/) &raquo; list</small>

`wp site list` - List all sites in a multisite install.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asite-list+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--network=&lt;id&gt;]
: The network to which the sites belong.

[\--&lt;field&gt;=&lt;value&gt;]
: Filter by one or more fields (see "Available Fields" section). However,
'url' isn't an available filter, because it's created from domain + path.

[\--site__in=&lt;value&gt;]
: Only list the sites with these blog_id values (comma-separated).

[\--field=&lt;field&gt;]
: Prints the value of a single field for each site.

[\--fields=&lt;fields&gt;]
: Comma-separated list of fields to show.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - count
  - ids
  - json
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each site:

* blog_id
* url
* last_updated
* registered

These fields are optionally available:

* site_id
* domain
* path
* public
* archived
* mature
* spam
* deleted
* lang_id

### EXAMPLES

    # Output a simple list of site URLs
    $ wp site list --field=url
    http://www.example.com/
    http://www.example.com/subdir/



