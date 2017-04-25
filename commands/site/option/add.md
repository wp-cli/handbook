# wp site option add

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Asite-option-add+sort%3Aupdated-desc">Github issues</a></small>

Add a site option.

### OPTIONS

&lt;key&gt;
: The name of the site option to add.

[&lt;value&gt;]
: The value of the site option to add. If ommited, the value is read from STDIN.

[\--format=&lt;format&gt;]
: The serialization format for the value.
\---
default: plaintext
options:
  - plaintext
  - json
\---

### EXAMPLES

    # Create a site option by reading a JSON file
    $ wp site option add my_option --format=json < config.json
    Success: Added 'my_option' site option.



