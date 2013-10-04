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
: Output list as table, csv, json or url. Defaults to table.

### EXAMPLES

    # Output a simple list of site URLs
    wp site list --field=url

