---
layout: default
title: 'wp user generate'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [user](/commands/user/) &raquo; generate</small>

`wp user generate` - Generate users.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Auser-generate+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--count=&lt;number&gt;]
: How many users to generate. Default: 100

[\--role=&lt;role&gt;]
: The role of the generated users. Default: default role from WP

[\--format=&lt;format&gt;]
: Accepted values: progress, ids. Default: ids.

### EXAMPLES

    # Add meta to every generated user
    $ wp user generate --format=ids --count=3 | xargs -0 -d ' ' -I % wp user meta add % foo bar
    Success: Added custom field.
    Success: Added custom field.
    Success: Added custom field.



