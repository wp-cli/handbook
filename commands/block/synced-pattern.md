# wp block synced-pattern

Manages synced patterns (reusable blocks).

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

Synced patterns are stored as the 'wp_block' post type and can be either synced (changes reflect everywhere) or not synced (regular patterns).

### EXAMPLES

    # List all synced patterns
    $ wp block synced-pattern list

    # Create a synced pattern
    $ wp block synced-pattern create --title="My Pattern" --content='&lt;!-- wp:paragraph --&gt;&lt;p&gt;Hello&lt;/p&gt;&lt;!-- /wp:paragraph --&gt;'

    # Delete a synced pattern
    $ wp block synced-pattern delete 123


