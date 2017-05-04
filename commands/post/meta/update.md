# wp post meta update

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Apost-meta-update+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Update a meta field.

### OPTIONS

&lt;id&gt;
: The ID of the object.

&lt;key&gt;
: The name of the meta field to update.

[&lt;value&gt;]
: The new value. If omitted, the value is read from STDIN.

[\--format=&lt;format&gt;]
: The serialization format for the value.
\---
default: plaintext
options:
  - plaintext
  - json
\---


