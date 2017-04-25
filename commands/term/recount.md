# wp term recount

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aterm-recount+sort%3Aupdated-desc">Github issues</a></small>

Recalculate number of posts assigned to each term.

In instances where manual updates are made to the terms assigned to
posts in the database, the number of posts associated with a term
can become out-of-sync with the actual number of posts.

This command runs wp_update_term_count() on the taxonomy's terms
to bring the count back to the correct value.

### OPTIONS

&lt;taxonomy&gt;...
: One or more taxonomies to recalculate.

### EXAMPLES

    # Recount posts assigned to each categories and tags
    $ wp term recount category post_tag
    Success: Updated category term count.
    Success: Updated post_tag term count.

    # Recount all listed taxonomies
    $ wp taxonomy list --field=name | xargs wp term recount
    Success: Updated category term count.
    Success: Updated post_tag term count.
    Success: Updated nav_menu term count.
    Success: Updated link_category term count.
    Success: Updated post_format term count.



