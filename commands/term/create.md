# wp term create

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


