# wp post-type list

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Apost-type-list+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

List registered post types.

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: Filter by one or more fields (see get_post_types() first parameter for a list of available fields).

[\--field=&lt;field&gt;]
: Prints the value of a single field for each post type.

[\--fields=&lt;fields&gt;]
: Limit the output to specific post type fields.

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
* hierarchical
* public
* capability_type

There are no optionally available fields.

### EXAMPLES

    # List registered post types
    $ wp post-type list --format=csv
    name,label,description,hierarchical,public,capability_type
    post,Posts,,,1,post
    page,Pages,,1,1,page
    attachment,Media,,,1,post
    revision,Revisions,,,,post
    nav_menu_item,"Navigation Menu Items",,,,post

    # List post types with 'post' capability type
    $ wp post-type list --capability_type=post --fields=name,public
    +---------------+--------+
    | name          | public |
    +---------------+--------+
    | post          | 1      |
    | attachment    | 1      |
    | revision      |        |
    | nav_menu_item |        |
    +---------------+--------+


