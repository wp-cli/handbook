# wp font face

Manages font faces.

To list, get, create, update or delete font faces, use `wp post` with `--post_type=wp_font_face`.

### EXAMPLES

    # Install a font face for an existing family
    $ wp font face install 42 --src="https://example.com/font.woff2" --font-weight=700
    Success: Created font face 43.

    # List installed font faces
    $ wp post list --post_type=wp_font_face


