# wp post block clone

Clones a block within a post.

Duplicates an existing block and inserts it at a specified position.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;id&gt;
: The ID of the post.

&lt;source-index&gt;
: Index of the block to clone (0-indexed).

[\--position=&lt;position&gt;]
: Where to insert the cloned block. Accepts 'after', 'before', 'start', 'end', or a numeric index.
\---
default: after
\---

[\--porcelain]
: Output just the new block index.

### EXAMPLES

    # Clone a block and insert immediately after it (default).
    $ wp post block clone 123 2
    Success: Cloned block to index 3 in post 123.

    # Clone the first block and insert immediately before it.
    $ wp post block clone 123 0 --position=before
    Success: Cloned block to index 0 in post 123.

    # Clone a block and insert at the end of the post.
    $ wp post block clone 123 0 --position=end
    Success: Cloned block to index 5 in post 123.

    # Clone a block and insert at the start of the post.
    $ wp post block clone 123 3 --position=start
    Success: Cloned block to index 0 in post 123.

    # Clone and get just the new block index for scripting.
    $ wp post block clone 123 1 --porcelain
    2

    # Duplicate the hero section (first block) at the end for a footer.
    $ wp post block clone 123 0 --position=end
    Success: Cloned block to index 10 in post 123.

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
