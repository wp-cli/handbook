---
layout: default
title: 'wp site list'
display_global_parameters: true
---

`wp site list` - List all sites in a multisite install.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asite-list+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--network=&lt;id&gt;]
: The network to which the sites belong.

[\--&lt;field&gt;=&lt;value&gt;]
: Filter by one or more fields.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each site.

[\--fields=&lt;fields&gt;]
: Comma-separated list of fields to show.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count, yaml. Default: table

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
    wp site list --field=url



