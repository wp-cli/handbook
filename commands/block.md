# wp block

Manages WordPress block editor blocks and related entities.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

### EXAMPLES

    # List all registered block types
    $ wp block type list

    # Get a specific block pattern
    $ wp block pattern get my-theme/hero

    # List block styles for a specific block
    $ wp block style list --block=core/button

    # Export a block template
    $ wp block template export twentytwentyfour//single --stdout

    # Create a synced pattern
    $ wp block synced-pattern create --title="My Pattern" --content='&lt;!-- wp:paragraph --&gt;&lt;p&gt;Hello&lt;/p&gt;&lt;!-- /wp:paragraph --&gt;'


