# wp cap list

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


