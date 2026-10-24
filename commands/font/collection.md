# wp font collection

Manages font collections.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

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


