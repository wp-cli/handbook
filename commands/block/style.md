# wp block style

Retrieves details on registered block styles.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

Get information on block style variations from the WP_Block_Styles_Registry.

### EXAMPLES

    # List all registered block styles
    $ wp block style list

    # List styles for a specific block
    $ wp block style list --block=core/button

    # Get details about a specific style
    $ wp block style get core/button outline


