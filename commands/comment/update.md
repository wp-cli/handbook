# wp comment update

Updates one or more comments.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;id&gt;...
: One or more IDs of comments to update.

[\--comment_agent=&lt;comment_agent&gt;]
: The HTTP user agent of the comment author.

[\--comment_approved=&lt;comment_approved&gt;]
: Whether the comment has been approved.

[\--comment_author=&lt;comment_author&gt;]
: The name of the author of the comment.

[\--comment_author_email=&lt;comment_author_email&gt;]
: The email address of the comment author.

[\--comment_author_IP=&lt;comment_author_IP&gt;]
: The IP address of the comment author.

[\--comment_author_url=&lt;comment_author_url&gt;]
: The URL address of the comment author.

[\--comment_content=&lt;comment_content&gt;]
: The content of the comment.

[\--comment_date=&lt;yyyy-mm-dd-hh-ii-ss&gt;]
: The date the comment was submitted.

[\--comment_date_gmt=&lt;yyyy-mm-dd-hh-ii-ss&gt;]
: The date the comment was submitted in the GMT timezone. Note that wp_update_comment() always recalculates this from 'comment_date'.

[\--comment_karma=&lt;comment_karma&gt;]
: The karma of the comment.

[\--comment_parent=&lt;comment_parent&gt;]
: ID of this comment's parent, if any.

[\--comment_post_ID=&lt;comment_post_ID&gt;]
: ID of the post that relates to the comment, if any.

[\--comment_type=&lt;comment_type&gt;]
: Comment type.

[\--comment_meta=&lt;comment_meta&gt;]
: Array in JSON format of comment meta values keyed by their comment meta key.

[\--user_id=&lt;user_id&gt;]
: ID of the user who submitted the comment.

\--&lt;field&gt;=&lt;value&gt;
: One or more fields to update. See wp_update_comment().

### EXAMPLES

    # Update comment.
    $ wp comment update 123 --comment_author='That Guy'
    Success: Updated comment 123.

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
