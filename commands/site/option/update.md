# wp site option update

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asite-option-update+sort%3Aupdated-desc">Github issues</a></small>

Update a site option.

### OPTIONS

&lt;key&gt;
: The name of the site option to update.

[&lt;value&gt;]
: The new value. If ommited, the value is read from STDIN.

[\--format=&lt;format&gt;]
: The serialization format for the value.
\---
default: plaintext
options:
  - plaintext
  - json
\---

### EXAMPLES

    # Update a site option by reading from a file
    $ wp site option update my_option < value.txt
    Success: Updated 'my_option' site option.



