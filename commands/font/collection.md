# wp font collection

Manages font collections.

Font collections are predefined sets of fonts that can be used in WordPress. Collections are registered by WordPress core or themes and cannot be created or deleted via the command line.

### EXAMPLES

    # List all font collections
    $ wp font collection list
    +------------------+-------------------+---------+
    | slug             | name              | count   |
    +------------------+-------------------+---------+
    | google-fonts     | Google Fonts      | 1500    |
    +------------------+-------------------+---------+

    # Get details about a specific font collection
    $ wp font collection get google-fonts
    +-------+------------------+
    | Field | Value            |
    +-------+------------------+
    | slug  | google-fonts     |
    | name  | Google Fonts     |
    +-------+------------------+


