# wp post block update

Updates a block's attributes or content by index.

Modifies a specific block without changing its type. For blocks where attributes are reflected in HTML (like heading levels), the HTML is automatically updated to match the new attributes.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;id&gt;
: The ID of the post.

&lt;index&gt;
: The block index to update (0-indexed).

[\--attrs=&lt;attrs&gt;]
: Block attributes as JSON. Merges with existing attributes by default.

[\--content=&lt;content&gt;]
: New innerHTML content for the block.

[\--replace-attrs]
: Replace all attributes instead of merging.

[\--porcelain]
: Output just the post ID.

### EXAMPLES

    # Change a heading from h2 to h3.
    $ wp post block update 123 0 --attrs='{"level":3}'
    Success: Updated block at index 0 in post 123.

    # Add alignment to an existing paragraph (merges with existing attrs).
    $ wp post block update 123 1 --attrs='{"align":"center"}'
    Success: Updated block at index 1 in post 123.

    # Update the text content of a paragraph block.
    $ wp post block update 123 2 --content="&lt;p&gt;Updated paragraph text&lt;/p&gt;"
    Success: Updated block at index 2 in post 123.

    # Update both attributes and content at once.
    $ wp post block update 123 0 --attrs='{"level":2}' --content="&lt;h2&gt;New Heading&lt;/h2&gt;"
    Success: Updated block at index 0 in post 123.

    # Replace all attributes instead of merging (removes existing attrs).
    $ wp post block update 123 0 --attrs='{"level":4}' --replace-attrs
    Success: Updated block at index 0 in post 123.

    # Get just the post ID for scripting.
    $ wp post block update 123 0 --attrs='{"level":2}' --porcelain
    123

    # Use custom HTML sync logic via the wp_cli_post_block_update_html filter.
    # Use WP_CLI::add_wp_hook() in a file loaded with --require.
    $ wp post block update 123 0 --attrs='{"url":"https://example.com"}' --require=my-sync-filters.php
    Success: Updated block at index 0 in post 123.

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
