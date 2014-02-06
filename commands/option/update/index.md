---
layout: default
title: 'wp option update'
---

`wp option update` - Update an option.

### OPTIONS

&lt;key&gt;
: The name of the option to add.

[&lt;value&gt;]
: The new value. If ommited, the value is read from STDIN.

[\--format=&lt;format&gt;]
: The serialization format for the value. Default is plaintext.

### EXAMPLES

    # Update an option by reading from a file
    wp option update my_option < value.txt

