# wp site option add

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


