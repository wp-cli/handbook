# wp core update-db

<small>[Commands](/commands/) &raquo; [core](/commands/core/) &raquo; update-db</small>

`wp core update-db` - Run the WordPress database update procedure.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acore-update-db+sort%3Aupdated-desc">Github issues</a></small>

<hr />

[\--network]
: Update databases for all sites on a network

[\--dry-run]
: Compare database versions without performing the update.

### EXAMPLES

    # Update the WordPress database
    $ wp core update-db
    Success: WordPress database upgraded successfully from db version 36686 to 35700.

    # Update databases for all sites on a network
    $ wp core update-db --network
    WordPress database upgraded successfully from db version 35700 to 29630 on example.com/
    Success: WordPress database upgraded on 123/123 sites



