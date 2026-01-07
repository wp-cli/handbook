# wp block synced-pattern

Manages synced patterns (reusable blocks).

Synced patterns are stored as the 'wp_block' post type and can be either synced (changes reflect everywhere) or not synced (regular patterns).

### EXAMPLES

    # List all synced patterns
    $ wp block synced-pattern list

    # Create a synced pattern
    $ wp block synced-pattern create --title="My Pattern" --content='&lt;!-- wp:paragraph --&gt;<p>Hello&lt;/p&gt;&lt;!-- /wp:paragraph --&gt;'

    # Delete a synced pattern
    $ wp block synced-pattern delete 123


