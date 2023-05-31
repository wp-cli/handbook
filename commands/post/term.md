# wp post term

Adds, updates, removes, and lists post terms.

### EXAMPLES

    # Set category post term `test` to the post ID 123
    $ wp post term set 123 test category
    Success: Set term.

    # Set category post terms `test` and `apple` to the post ID 123
    $ wp post term set 123 test apple category
    Success: Set terms.

    # List category post terms for the post ID 123
    $ wp post term list 123 category --fields=term_id,slug
    +---------+-------+
    | term_id | slug  |
    +---------+-------+
    | 2       | apple |
    | 3       | test  |
    +----------+------+

    # Remove category post terms `test` and `apple` for the post ID 123
    $ wp post term remove 123 category test apple
    Success: Removed terms.




