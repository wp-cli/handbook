---
layout: default
title: 'wp cache type'
display_global_parameters: true
---

`wp cache type` - Attempts to determine which object cache is being used.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acache-type+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Note that the guesses made by this function are based on the WP_Object_Cache classes
that define the 3rd party object cache extension. Changes to those classes could render
problems with this function's ability to determine which object cache is being used.

### EXAMPLES

    # Check cache type.
    $ wp cache type
    Default



