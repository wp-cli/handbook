# wp transient delete

Delete a transient value.

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


