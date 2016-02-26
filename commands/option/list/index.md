---
layout: default
title: 'wp option list'
display_global_parameters: true
---

`wp option list` - List options.

<hr />

[\--search=&lt;pattern&gt;]
: Use wildcards ( * and ? ) to match option name.

[\--autoload=&lt;value&gt;]
: Match only autoload options when value is on, and only not-autoload option when off.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: The serialization format for the value. total_bytes displays the total size of matching options in bytes. Accepted values: table, json, csv, count, total_bytes. Default: table

### EXAMPLES

    # Get the total size of all autoload options
    wp option list --autoload=on --format=total_bytes

    # Find biggest transients
    wp option list --search="*_transient_*" --fields=option_name,size_bytes | sort -n -k 2 | tail

    # List all options begining with "i2f_"
    wp option list --search "i2f_*"

### AVAILABLE FIELDS

This field will be displayed by default for each matching option:

* option_name
* option_value

These fields are optionally available:

* autoload
* size_bytes



