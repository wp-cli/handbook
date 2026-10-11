# wp font

Manages WordPress fonts.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

### EXAMPLES

    # List all font collections
    $ wp font collection list

    # Install a font family from a collection
    $ wp font family install google-fonts inter

    # List installed font families
    $ wp post list --post_type=wp_font_family

    # List installed font faces
    $ wp post list --post_type=wp_font_face


