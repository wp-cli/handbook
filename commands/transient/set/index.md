---
layout: default
title: 'wp transient set'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [transient](/commands/transient/) &raquo; set</small>

`wp transient set` - Set a transient value.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atransient-set+sort%3Aupdated-desc">Github issues</a></small>

<hr />

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



