---
layout: default
title: 'wp site list'
---

`wp site list` - List all sites in a multisite install.

### OPTIONS

[\--network=&lt;id&gt;]
: The network to which the sites belong.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each site.

[\--fields=&lt;fields&gt;]
: Comma-separated list of fields to show.

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

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

