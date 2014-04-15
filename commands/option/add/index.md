---
layout: default
title: 'wp option add'
---

`wp option add` - Add an option.

### OPTIONS

&lt;key&gt;
: The name of the option to add.

[&lt;value&gt;]
: The value of the option to add. If ommited, the value is read from STDIN.

[\--format=&lt;format&gt;]
: The serialization format for the value. Default is plaintext.

[\--autoload=&lt;autoload&gt;]
: Should this option be automatically loaded. Accepted values: yes, no. Default: yes

### EXAMPLES

    # Create an option by reading a JSON file
    wp option add my_option --format=json < config.json

