# wp font family

Manages font families.

To list, get, create, update or delete font families, use `wp post` with `--post_type=wp_font_family`.

### EXAMPLES

    # Install a font family from a collection
    $ wp font family install google-fonts inter
    Success: Installed font family "Inter" (ID: 42) with 9 font faces.

    # List installed font families
    $ wp post list --post_type=wp_font_family


