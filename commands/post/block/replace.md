# wp post block replace

Replaces blocks in a post.

Replaces blocks of one type with blocks of another type. Can also be used to update block attributes without changing the block type.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;id&gt;
: The ID of the post to modify.

&lt;old-block-name&gt;
: The block type name to replace.

&lt;new-block-name&gt;
: The new block type name.

[\--attrs=&lt;attrs&gt;]
: New block attributes as JSON.

[\--content=&lt;content&gt;]
: New block content. Use '{content}' to preserve original content.

[\--all]
: Replace all matching blocks. By default, only the first match is replaced.

[\--porcelain]
: Output just the number of blocks replaced.

### EXAMPLES

    # Replace the first paragraph block with a heading.
    $ wp post block replace 123 core/paragraph core/heading
    Success: Replaced 1 block in post 123.

    # Replace all paragraphs with preformatted blocks, keeping content.
    $ wp post block replace 123 core/paragraph core/preformatted --content='{content}' --all
    Success: Replaced 3 blocks in post 123.

    # Change all h2 headings to h3.
    $ wp post block replace 123 core/heading core/heading --attrs='{"level":3}' --all

    # Replace and get count for scripting.
    $ wp post block replace 123 core/quote core/pullquote --all --porcelain
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
