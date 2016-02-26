---
layout: default
title: 'wp option update'
display_global_parameters: true
---

`wp option update` - Update an option.

<hr />

### OPTIONS

&lt;key&gt;
: The name of the option to add.

[&lt;value&gt;]
: The new value. If ommited, the value is read from STDIN.

[\--autoload=&lt;autoload&gt;]
: Requires WP 4.2. Should this option be automatically loaded. Accepted values: yes, no. Default: yes

[\--format=&lt;format&gt;]
: The serialization format for the value. Default is plaintext.

### EXAMPLES

    # Update an option by reading from a file
    wp option update my_option < value.txt

    # Update one option on multiple sites using xargs
    wp site list --field=url | xargs -n1 -I {} sh -c 'wp --url={} option update &lt;key&gt; &lt;value&gt;'



