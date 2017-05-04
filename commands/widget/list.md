# wp widget list

List widgets associated with a sidebar.

### OPTIONS

&lt;sidebar-id&gt;
: ID for the corresponding sidebar.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - ids
  - json
  - count
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each widget:

* name
* id
* position
* options

There are no optionally available fields.

### EXAMPLES

    $ wp widget list sidebar-1 --fields=name,id --format=csv
    name,id
    meta,meta-5
    search,search-3


