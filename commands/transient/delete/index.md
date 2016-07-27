---
layout: default
title: 'wp transient delete'
display_global_parameters: true
---

`wp transient delete` - Delete a transient value.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atransient-delete+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;key&gt;
: Key for the transient.

[\--network]
: Delete the value of a network transient, instead of that on a single site.

### EXAMPLES

    $ wp transient delete sample_key
    Success: Transient deleted.



