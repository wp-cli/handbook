# wp core update-db

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acore-update-db+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Run the WordPress database update procedure.

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


