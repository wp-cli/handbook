# wp post block count

Counts blocks across multiple posts.

Analyzes block usage across posts for site-wide reporting.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[&lt;id&gt;...]
: Optional post IDs. If not specified, queries all posts.

[\--block=&lt;block-name&gt;]
: Only count specific block type.

[\--post-type=&lt;type&gt;]
: Limit to specific post type(s). Comma-separated.
\---
default: post,page
\---

[\--post-status=&lt;status&gt;]
: Post status to include.
\---
default: publish
\---

[\--format=&lt;format&gt;]
: Output format.
\---
default: table
options:
  - table
  - json
  - csv
  - yaml
  - count
\---

### EXAMPLES

    # Count all blocks across published posts and pages.
    $ wp post block count
    +------------------+-------+-------+
    | blockName        | count | posts |
    +------------------+-------+-------+
    | core/paragraph   | 1542  | 234   |
    | core/heading     | 523   | 198   |
    | core/image       | 312   | 156   |
    +------------------+-------+-------+

    # Count blocks in specific posts only.
    $ wp post block count 123 456 789
    +------------------+-------+-------+
    | blockName        | count | posts |
    +------------------+-------+-------+
    | core/paragraph   | 8     | 3     |
    | core/heading     | 3     | 2     |
    +------------------+-------+-------+

    # Count only paragraph blocks across the site.
    $ wp post block count --block=core/paragraph --format=count
    1542

    # Count blocks in a custom post type.
    $ wp post block count --post-type=product

    # Count blocks in multiple post types.
    $ wp post block count --post-type=post,page,product

    # Count blocks including drafts.
    $ wp post block count --post-status=draft

    # Get count as JSON for further processing.
    $ wp post block count --format=json
    [{"blockName":"core/paragraph","count":1542,"posts":234}]

    # Get total number of unique block types used.
    $ wp post block count --format=count
    15

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
