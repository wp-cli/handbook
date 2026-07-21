# wp post block extract

Extracts data from blocks.

Extracts specific attribute values or content from blocks for scripting.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;id&gt;
: The ID of the post.

[\--block=&lt;block-name&gt;]
: Filter by block type.

[\--index=&lt;index&gt;]
: Get from specific block index.

[\--attr=&lt;attr&gt;]
: Extract specific attribute value.

[\--content]
: Extract innerHTML content.

[\--format=&lt;format&gt;]
: Output format.
\---
default: json
options:
  - json
  - yaml
  - csv
  - ids
\---

### EXAMPLES

    # Extract all image IDs from the post (one per line).
    $ wp post block extract 123 --block=core/image --attr=id --format=ids
    456
    789
    1024

    # Extract all image URLs as JSON array.
    $ wp post block extract 123 --block=core/image --attr=url --format=json
    ["https://example.com/img1.jpg","https://example.com/img2.jpg"]

    # Extract text content from all headings.
    $ wp post block extract 123 --block=core/heading --content --format=ids
    Introduction
    Getting Started
    Conclusion

    # Get the heading level from the first block.
    $ wp post block extract 123 --index=0 --attr=level --format=ids
    2

    # Extract all heading levels as CSV.
    $ wp post block extract 123 --block=core/heading --attr=level --format=csv
    2,3,3,2

    # Extract paragraph content as YAML.
    $ wp post block extract 123 --block=core/paragraph --content --format=yaml
    - "First paragraph text"
    - "Second paragraph text"

    # Get all button URLs for link checking.
    $ wp post block extract 123 --block=core/button --attr=url --format=ids
    https://example.com/signup
    https://example.com/learn-more

    # Extract cover block image IDs for media audit.
    $ wp post block extract 123 --block=core/cover --attr=id --format=json

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
