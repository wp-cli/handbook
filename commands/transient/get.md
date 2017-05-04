# wp transient get

Get a transient value.

### OPTIONS

&lt;key&gt;
: Key for the transient.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - yaml
\---

[\--network]
: Get the value of the network transient, instead of the single site.

### EXAMPLES

    $ wp transient get sample_key
    test data

    $ wp transient get random_key
    Warning: Transient with key "random_key" is not set.


