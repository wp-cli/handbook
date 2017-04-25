# wp menu location list

<small>[Commands](/commands/) &raquo; [menu](/commands/menu/) &raquo; [location](/commands/menu/location/) &raquo; list</small>

`wp menu location list` - List locations for the current theme.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Amenu-location-list+sort%3Aupdated-desc">Github issues</a></small>

<hr />

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



