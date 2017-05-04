# wp taxonomy list

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Ataxonomy-list+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

List registered taxonomies.

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: Filter by one or more fields (see get_taxonomies() first parameter for a list of available fields).

[\--field=&lt;field&gt;]
: Prints the value of a single field for each taxonomy.

[\--fields=&lt;fields&gt;]
: Limit the output to specific taxonomy fields.

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

These fields will be displayed by default for each term:

* name
* label
* description
* public
* hierarchical

There are no optionally available fields.

### EXAMPLES

    # List all taxonomies.
    $ wp taxonomy list --format=csv
    name,label,description,object_type,show_tagcloud,hierarchical,public
    category,Categories,,post,1,1,1
    post_tag,Tags,,post,1,,1
    nav_menu,"Navigation Menus",,nav_menu_item,,,
    link_category,"Link Categories",,link,1,,
    post_format,Format,,post,,,1

    # List all taxonomies with 'post' object type.
    $ wp taxonomy list --object_type=post --fields=name,public
    +-------------+--------+
    | name        | public |
    +-------------+--------+
    | category    | 1      |
    | post_tag    | 1      |
    | post_format | 1      |
    +-------------+--------+


