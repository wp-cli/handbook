---
layout: default
title: 'wp term generate'
display_global_parameters: true
---

`wp term generate` - Generate some terms.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aterm-generate+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;taxonomy&gt;
: The taxonomy for the generated terms.

[\--count=&lt;number&gt;]
: How many terms to generate. Default: 100

[\--max_depth=&lt;number&gt;]
: Generate child terms down to a certain depth. Default: 1

### EXAMPLES

    wp term generate --count=10



