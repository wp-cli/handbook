# wp media prune

Removes all generated image files for one or more attachments.

Generated image files for registered sizes can be recreated with `wp media regenerate`. Thumbnails for image sizes that are no longer registered are kept by default because they cannot be regenerated; use `--remove-abandoned` to remove them as well.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[&lt;attachment-id&gt;...]
: One or more IDs of the attachments to prune.

[\--image_size=&lt;image_size&gt;...]
: Name of the image size to remove. Repeat the flag to specify multiple. Only thumbnails of specified image size(s) will be removed, thumbnails of other image sizes will not.

[\--remove-abandoned]
: Also remove thumbnails for image sizes that are no longer registered.

[\--yes]
: Answer yes to the confirmation message. Confirmation only shows when no IDs passed as arguments.

### EXAMPLES

    # Remove all generated thumbnails for all images, without confirmation.
    $ wp media prune --yes
    Found 3 images to prune.
    1/3 Pruned thumbnails for "Sydney Harbor Bridge" (ID 760).
    2/3 Pruned thumbnails for "Boardwalk" (ID 757).
    3/3 Pruned thumbnails for "Sunburst Over River" (ID 756).
    Success: Pruned 3 of 3 images.

    # Remove only the "large" thumbnails for all images.
    $ wp media prune --image_size=large
    Do you really want to prune the "large" image size for all images? [y/n] y
    Found 3 images to prune.
    1/3 Pruned thumbnails for "Sydney Harbor Bridge" (ID 760).
    2/3 Pruned thumbnails for "Boardwalk" (ID 757).
    3/3 Pruned thumbnails for "Sunburst Over River" (ID 756).
    Success: Pruned 3 of 3 images.

    # Remove all thumbnails including those for unregistered sizes.
    $ wp media prune --remove-abandoned --yes
    Found 3 images to prune.
    1/3 Pruned thumbnails for "Sydney Harbor Bridge" (ID 760).
    2/3 Pruned thumbnails for "Boardwalk" (ID 757).
    3/3 Pruned thumbnails for "Sunburst Over River" (ID 756).
    Success: Pruned 3 of 3 images.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
| `--ssh-args=<args>` | Pass additional arguments to SSH (or other tools specified by --ssh scheme). |
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
| `--alias=<name>` | Name of the alias to use. Aliases can reference local WordPress installations or remote SSH connections. Aliases are defined in the wp-cli.yml file. |
| `--assume-https` | Set $_SERVER['HTTPS'] to make WordPress treat the site as HTTPS. Use when WordPress is behind an HTTPS proxy or load balancer. |
