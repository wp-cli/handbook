# wp cap list

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acap-list+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

List capabilities for a given role.

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

    # Display alphabetical list of Contributor capabilities.
    $ wp cap list 'contributor' | sort
    delete_posts
    edit_posts
    level_0
    level_1
    read



