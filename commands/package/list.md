# wp package list

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Apackage-list+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

List installed WP-CLI packages.

### OPTIONS

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to all fields.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - ids
  - json
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each package:

* name
* authors
* version
* update
* update_version

These fields are optionally available:

* description

### EXAMPLES

    $ wp package list
    +-----------------------+------------------------------------------+---------+------------+
    | name                  | description                              | authors | version    |
    +-----------------------+------------------------------------------+---------+------------+
    | wp-cli/server-command | Start a development server for WordPress |         | dev-master |
    +-----------------------+------------------------------------------+---------+------------+


