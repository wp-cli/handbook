# wp font face

Manages font faces.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

To list, get, create, update or delete font faces, use `wp post` with `--post_type=wp_font_face`.

### EXAMPLES

    # Install a font face for an existing family
    $ wp font face install 42 --src="https://example.com/font.woff2" --font-weight=700
    Success: Created font face 43.

    # List installed font faces
    $ wp post list --post_type=wp_font_face


