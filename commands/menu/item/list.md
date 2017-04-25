# wp menu item list

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Amenu-item-list+sort%3Aupdated-desc">Github issues</a></small>

Get a list of items associated with a menu.

### OPTIONS

&lt;menu&gt;
: The name, slug, or term ID for the menu.

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
  - ids
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each menu item:

* db_id
* type
* title
* link
* position

These fields are optionally available:

* menu_item_parent
* object_id
* object
* type
* type_label
* target
* attr_title
* description
* classes
* xfn

### EXAMPLES

    $ wp menu item list main-menu
    +-------+-----------+-------------+---------------------------------+----------+
    | db_id | type      | title       | link                            | position |
    +-------+-----------+-------------+---------------------------------+----------+
    | 5     | custom    | Home        | http://example.com              | 1        |
    | 6     | post_type | Sample Page | http://example.com/sample-page/ | 2        |
    +-------+-----------+-------------+---------------------------------+----------+



