# wp post block

Manages blocks within post content.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

Provides commands for inspecting, manipulating, and managing Gutenberg blocks in post content.

### EXAMPLES

    # List all blocks in a post.
    $ wp post block list 123
    +------------------+-------+
    | blockName        | count |
    +------------------+-------+
    | core/paragraph   | 2     |
    | core/heading     | 1     |
    +------------------+-------+

    # Parse blocks in a post to JSON.
    $ wp post block parse 123 --format=json

    # Insert a paragraph block.
    $ wp post block insert 123 core/paragraph --content="Hello World"




