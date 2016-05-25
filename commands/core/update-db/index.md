---
layout: default
title: 'wp core update-db'
display_global_parameters: true
---

`wp core update-db` - Update the WordPress database.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acore-update-db+sort%3Aupdated-desc">Github issues</a></small>

<hr />

[\--network]
: Update databases for all sites on a network

[\--dry-run]
: Compare database versions without performing the update.

### EXAMPLES

    $ wp core update-db
    Success: WordPress database upgraded successfully from db version 36686 to 35700

    $ wp core update-db --network
    WordPress database upgraded successfully from db version 35700 to 29630 on example.com/
    Success: WordPress database upgraded on 123/123 sites



