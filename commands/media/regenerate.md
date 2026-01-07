# wp media regenerate

Regenerates thumbnails for one or more attachments.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[<attachment-id>...]
: One or more IDs of the attachments to regenerate.

[\--image_size=<image_size>]
: Name of the image size to regenerate. Only thumbnails of this image size will be regenerated, thumbnails of other image sizes will not.

[\--skip-delete]
: Skip deletion of the original thumbnails. If your thumbnails are linked from sources outside your control, it's likely best to leave them around. Defaults to false.

[\--only-missing]
: Only generate thumbnails for images missing image sizes.

[\--delete-unknown]
: Only delete thumbnails for old unregistered image sizes.

[\--yes]
: Answer yes to the confirmation message. Confirmation only shows when no IDs passed as arguments.

### EXAMPLES

    # Regenerate thumbnails for given attachment IDs.
    $ wp media regenerate 123 124 125
    Found 3 images to regenerate.
    1/3 Regenerated thumbnails for "Vertical Image" (ID 123).
    2/3 Regenerated thumbnails for "Horizontal Image" (ID 124).
    3/3 Regenerated thumbnails for "Beautiful Picture" (ID 125).
    Success: Regenerated 3 of 3 images.

    # Regenerate all thumbnails, without confirmation.
    $ wp media regenerate --yes
    Found 3 images to regenerate.
    1/3 Regenerated thumbnails for "Sydney Harbor Bridge" (ID 760).
    2/3 Regenerated thumbnails for "Boardwalk" (ID 757).
    3/3 Regenerated thumbnails for "Sunburst Over River" (ID 756).
    Success: Regenerated 3 of 3 images.

    # Re-generate all thumbnails that have IDs between 1000 and 2000.
    $ seq 1000 2000 | xargs wp media regenerate
    Found 4 images to regenerate.
    1/4 Regenerated thumbnails for "Vertical Featured Image" (ID 1027).
    2/4 Regenerated thumbnails for "Horizontal Featured Image" (ID 1022).
    3/4 Regenerated thumbnails for "Unicorn Wallpaper" (ID 1045).
    4/4 Regenerated thumbnails for "I Am Worth Loving Wallpaper" (ID 1023).
    Success: Regenerated 4 of 4 images.

    # Re-generate only the thumbnails of "large" image size for all images.
    $ wp media regenerate --image_size=large
    Do you really want to regenerate the "large" image size for all images? [y/n] y
    Found 3 images to regenerate.
    1/3 Regenerated "large" thumbnail for "Sydney Harbor Bridge" (ID 760).
    2/3 No "large" thumbnail regeneration needed for "Boardwalk" (ID 757).
    3/3 Regenerated "large" thumbnail for "Sunburst Over River" (ID 756).
    Success: Regenerated 3 of 3 images.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
