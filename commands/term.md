# wp term

Manages taxonomy terms and term meta, including create, delete, and list.

See reference for [taxonomies and their terms](https://codex.wordpress.org/Taxonomies).

### Examples

    # Create a new term.
    $ wp term create category Apple --description="A type of fruit"
    Success: Created category 199.

    # Get details about a term.
    $ wp term get category 199 --format=json --fields=term_id,name,slug,count
    {"term_id":199,"name":"Apple","slug":"apple","count":1}

    # Update an existing term.
    $ wp term update category 15 --name=Apple
    Success: Term updated.

    # Get the term's URL.
    $ wp term list post_tag --include=123 --field=url
    http://example.com/tag/tips-and-tricks

    # Delete post category
    $ wp term delete category 15
    Success: Deleted category 15.

    # Recount posts assigned to each categories and tags
    $ wp term recount category post_tag
    Success: Updated category term count
    Success: Updated post_tag term count
