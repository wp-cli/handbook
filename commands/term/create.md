# wp term create

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Aterm-create+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Create a new term.

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy for the new term.

&lt;term&gt;
: A name for the new term.

[\--slug=&lt;slug&gt;]
: A unique slug for the new term. Defaults to sanitized version of name.

[\--description=&lt;description&gt;]
: A description for the new term.

[\--parent=&lt;term-id&gt;]
: A parent for the new term.

[\--porcelain]
: Output just the new term id.

### EXAMPLES

    # Create a new category "Apple" with a description.
    $ wp term create category Apple --description="A type of fruit"
    Success: Created category 199.


