# wp transient set

Set a transient value.

`&lt;expiration&gt;` is the time until expiration, in seconds.

### OPTIONS

&lt;key&gt;
: Key for the transient.

&lt;value&gt;
: Value to be set for the transient.

[&lt;expiration&gt;]
: Time until expiration, in seconds.

[\--network]
: Set the transient value on the network, instead of single site.

### EXAMPLES

    $ wp transient set sample_key "test data" 3600
    Success: Transient added.


