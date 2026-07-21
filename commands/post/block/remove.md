# wp post block remove

Removes blocks from a post by name or index.

Removes one or more blocks from the post content. Blocks can be removed by their type name or by their position index.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;id&gt;
: The ID of the post to modify.

[&lt;block-name&gt;]
: The block type name to remove (e.g., 'core/paragraph').

[\--index=&lt;index&gt;]
: Remove block at specific index (0-indexed). Can be comma-separated for multiple indices.

[\--all]
: Remove all blocks of the specified type.

[\--porcelain]
: Output just the number of blocks removed.

### EXAMPLES

    # Remove the first block (index 0).
    $ wp post block remove 123 --index=0
    Success: Removed 1 block from post 123.

    # Remove the first paragraph block found.
    $ wp post block remove 123 core/paragraph
    Success: Removed 1 block from post 123.

    # Remove all paragraph blocks.
    $ wp post block remove 123 core/paragraph --all
    Success: Removed 5 blocks from post 123.

    # Remove blocks at multiple indices.
    $ wp post block remove 123 --index=0,2,4
    Success: Removed 3 blocks from post 123.

    # Remove all image blocks and get count.
    $ wp post block remove 123 core/image --all --porcelain
    2

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
