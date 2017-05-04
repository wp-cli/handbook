# wp transient

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Atransient+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage transients.

### EXAMPLES

    # Set transient.
    $ wp transient set sample_key "test data" 3600
    Success: Transient added.

    # Get transient.
    $ wp transient get sample_key
    test data

    # Delete transient.
    $ wp transient delete sample_key
    Success: Transient deleted.

    # Delete expired transients.
    $ wp transient delete --expired
    Success: 12 expired transients deleted from the database.

    # Delete all transients.
    $ wp transient delete --all
    Success: 14 transients deleted from the database.


