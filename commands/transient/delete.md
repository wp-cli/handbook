# wp transient delete

<small>[Commands](/commands/) &raquo; [transient](/commands/transient/) &raquo; delete</small>

`wp transient delete` - Delete a transient value.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atransient-delete+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[&lt;key&gt;]
: Key for the transient.

[\--network]
: Delete the value of a network transient, instead of that on a single site.

[\--all]
: Delete all transients.

[\--expired]
: Delete all expired transients.

### EXAMPLES

    # Delete transient.
    $ wp transient delete sample_key
    Success: Transient deleted.

    # Delete expired transients.
    $ wp transient delete --expired
    Success: 12 expired transients deleted from the database.

    # Delete all transients.
    $ wp transient delete --all
    Success: 14 transients deleted from the database.



