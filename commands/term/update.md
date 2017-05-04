# wp term update

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Aterm-update+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Update an existing term.

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


