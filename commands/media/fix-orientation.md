# wp media fix-orientation

Fix image orientation for one or more attachments.

### OPTIONS

[&lt;attachment-id&gt;...]
: One or more IDs of the attachments to regenerate.

[\--dry-run]
: Check images needing orientation without performing the operation.

### EXAMPLES

    # Fix orientation for all images.
    $ wp media fix-orientation
    1/3 Fixing orientation for "Landscape_4" (ID 62).
    2/3 Fixing orientation for "Landscape_3" (ID 61).
    3/3 Fixing orientation for "Landscape_2" (ID 60).
    Success: Fixed 3 of 3 images.

    # Fix orientation dry run.
    $ wp media fix-orientation 63 -dry run
    1/1 "Portrait_6" (ID 63) will be affected.
    Success: 1 of 1 image will be affected.

    # Fix orientation for specific images.
    $ wp media fix-orientation 63
    1/1 Fixing orientation for "Portrait_6" (ID 63).
    Success: Fixed 1 of 1 images.

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
