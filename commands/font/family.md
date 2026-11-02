# wp font family

Manages font families.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

To list, get, create, update or delete font families, use `wp post` with `--post_type=wp_font_family`.

### EXAMPLES

    # Install a font family from a collection
    $ wp font family install google-fonts inter
    Success: Installed font family "Inter" (ID: 42) with 9 font faces.

    # List installed font families
    $ wp post list --post_type=wp_font_family


