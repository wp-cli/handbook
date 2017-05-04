# wp taxonomy

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Ataxonomy+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage taxonomies.

### EXAMPLES

    # List all taxonomies with 'post' object type.
    $ wp taxonomy list --object_type=post --fields=name,public
    +-------------+--------+
    | name        | public |
    +-------------+--------+
    | category    | 1      |
    | post_tag    | 1      |
    | post_format | 1      |
    +-------------+--------+

    # Get capabilities of 'post_tag' taxonomy.
    $ wp taxonomy get post_tag --field=cap
    {"manage_terms":"manage_categories","edit_terms":"manage_categories","delete_terms":"manage_categories","assign_terms":"edit_posts"}


