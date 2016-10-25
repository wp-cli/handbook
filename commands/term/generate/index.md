---
layout: default
title: 'wp term generate'
display_global_parameters: true
---

<small>[Commands](/commands/) &raquo; [term](/commands/term/) &raquo; generate</small>

`wp term generate` - Generate some terms.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aterm-generate+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;taxonomy&gt;
: The taxonomy for the generated terms.

[\--count=&lt;number&gt;]
: How many terms to generate?
\---
default: 100
\---

[\--max_depth=&lt;number&gt;]
: Generate child terms down to a certain depth.
\---
default: 1
\---

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: progress
options:
  - progress
  - ids
\---

### EXAMPLES

    # Generate post categories.
    $ wp term generate category --count=10
    Generating terms  100% [=========] 0:02 / 0:02

    # Add meta to every generated term.
    $ wp term generate category --format=ids --count=3 | xargs -d ' ' -I % wp term meta add % foo bar
    Success: Added custom field.
    Success: Added custom field.
    Success: Added custom field.



