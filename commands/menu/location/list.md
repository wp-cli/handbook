# wp menu location list

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Amenu-location-list+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

List locations for the current theme.

### OPTIONS

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
  - ids
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each location:

* name
* description

### EXAMPLES

    $ wp menu location list
    +----------+-------------------+
    | location | description       |
    +----------+-------------------+
    | primary  | Primary Menu      |
    | social   | Social Links Menu |
    +----------+-------------------+


