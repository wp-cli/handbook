# wp term update

<small>[Commands](/commands/) &raquo; [term](/commands/term/) &raquo; update</small>

`wp term update` - Update an existing term.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aterm-update+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy of the term to update.

&lt;term-id&gt;
: ID for the term to update.

[\--name=&lt;name&gt;]
: A new name for the term.

[\--slug=&lt;slug&gt;]
: A new slug for the term.

[\--description=&lt;description&gt;]
: A new description for the term.

[\--parent=&lt;term-id&gt;]
: A new parent for the term.

### EXAMPLES

    # Change category with id 15 to use the name "Apple"
    $ wp term update category 15 --name=Apple
    Success: Term updated.



