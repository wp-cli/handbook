# wp post block insert

Inserts a block into a post at a specified position.

Adds a new block to the post content. By default, the block is appended to the end of the post.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;id&gt;
: The ID of the post to modify.

&lt;block-name&gt;
: The block type name (e.g., 'core/paragraph').

[\--content=&lt;content&gt;]
: The inner content/HTML for the block.

[\--attrs=&lt;attrs&gt;]
: Block attributes as JSON.

[\--position=&lt;position&gt;]
: Position to insert the block (0-indexed). Use 'start' or 'end'.
\---
default: end
\---

[\--porcelain]
: Output just the post ID.

### EXAMPLES

    # Insert a paragraph block at the end of the post.
    $ wp post block insert 123 core/paragraph --content="Hello World"
    Success: Inserted block into post 123.

    # Insert a level-2 heading at the start.
    $ wp post block insert 123 core/heading --content="My Title" --attrs='{"level":2}' --position=start
    Success: Inserted block into post 123.

    # Insert an image block at position 2.
    $ wp post block insert 123 core/image --attrs='{"id":456,"url":"https://example.com/image.jpg"}' --position=2

    # Insert a separator block.
    $ wp post block insert 123 core/separator

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
