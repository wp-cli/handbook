# wp sidebar list

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Asidebar-list+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

List registered sidebars.

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
  - ids
  - count
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each sidebar:

* name
* id
* description

These fields are optionally available:

* class
* before_widget
* after_widget
* before_title
* after_title

### EXAMPLES

    $ wp sidebar list --fields=name,id --format=csv
    name,id
    "Widget Area",sidebar-1
    "Inactive Widgets",wp_inactive_widgets


