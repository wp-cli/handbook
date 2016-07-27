---
layout: default
title: 'wp cap list'
display_global_parameters: true
---

`wp cap list` - List capabilities for a given role.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acap-list+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;role&gt;
: Key for the role.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: list
options:
  - list
  - table
  - csv
  - json
  - count
  - yaml
\---

### EXAMPLES

    # Display alphabetical list of Contributor capabilities
    $ wp cap list 'contributor' | sort
    delete_posts
    edit_posts
    level_0
    level_1
    read



