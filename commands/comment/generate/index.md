---
layout: default
title: 'wp comment generate'
display_global_parameters: true
---

`wp comment generate` - Generate comments.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acomment-generate+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--count=&lt;number&gt;]
: How many comments to generate. Default: 100

[\--post_id=&lt;post-id&gt;]
: Assign comments to a specific post.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: progress
options:
  - progress
  - ids
\---

### EXAMPLES

    # Add meta to every generated comment
    $ wp comment generate --format=ids --count=3 | xargs -0 -d ' ' -I % wp comment meta add % foo bar
    Success: Added custom field.
    Success: Added custom field.
    Success: Added custom field.



