# wp transient get

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Atransient-get+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

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



