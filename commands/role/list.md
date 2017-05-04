# wp role list

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Arole-list+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

List all roles.

### OPTIONS

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - count
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each role:

* name
* role

There are no optional fields.

### EXAMPLES

    # List roles.
    $ wp role list --fields=role --format=csv
    role
    administrator
    editor
    author
    contributor
    subscriber


