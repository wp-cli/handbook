# wp term delete

<small>[Commands](/commands/) &raquo; [term](/commands/term/) &raquo; delete</small>

`wp term delete` - Delete an existing term.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aterm-delete+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Errors if the term doesn't exist, or there was a problem in deleting it.

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy of the term to delete.

&lt;term-id&gt;...
: One or more IDs of terms to delete.

### EXAMPLES

    # Delete post category
    $ wp term delete category 15
    Deleted category 15.
    Success: Deleted 1 of 1 terms.

    # Delete all post tags
    $ wp term list post_tag --field=term_id | xargs wp term delete post_tag
    Deleted post_tag 159.
    Deleted post_tag 160.
    Deleted post_tag 161.
    Success: Deleted 3 of 3 terms.



