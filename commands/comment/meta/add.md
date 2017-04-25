# wp comment meta add

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acomment-meta-add+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Add a meta field.

### OPTIONS

&lt;id&gt;
: The ID of the object.

&lt;key&gt;
: The name of the meta field to create.

[&lt;value&gt;]
: The value of the meta field. If omitted, the value is read from STDIN.

[\--format=&lt;format&gt;]
: The serialization format for the value.
\---
default: plaintext
options:
  - plaintext
  - json
\---



