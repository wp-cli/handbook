# wp post-type get

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Apost-type-get+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Get details about a registered post type.

### OPTIONS

&lt;post-type&gt;
: Post type slug

[\--field=&lt;field&gt;]
: Instead of returning the whole taxonomy, returns the value of a single field.

[\--fields=&lt;fields&gt;]
: Limit the output to specific fields. Defaults to all fields.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - yaml
\---

### EXAMPLES

    # Get details about the 'page' post type.
    $ wp post-type get page --fields=name,label,hierarchical --format=json
    {"name":"page","label":"Pages","hierarchical":true}



