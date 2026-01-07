# wp block

Manages WordPress block editor blocks and related entities.

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
    $ wp block synced-pattern create --title="My Pattern" --content='&lt;!-- wp:paragraph --&gt;<p>Hello&lt;/p&gt;&lt;!-- /wp:paragraph --&gt;'


