# wp post create

Creates a new post.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--post_author=<post_author>]
: The ID of the user who added the post. Default is the current user ID.

[\--post_date=<post_date>]
: The date of the post. Default is the current time.

[\--post_date_gmt=<post_date_gmt>]
: The date of the post in the GMT timezone. Default is the value of $post_date.

[\--post_content=<post_content>]
: The post content. Default empty.

[\--post_content_filtered=<post_content_filtered>]
: The filtered post content. Default empty.

[\--post_title=<post_title>]
: The post title. Default empty.

[\--post_excerpt=<post_excerpt>]
: The post excerpt. Default empty.

[\--post_status=<post_status>]
: The post status. Default 'draft'.

[\--post_type=<post_type>]
: The post type. Default 'post'.

[\--comment_status=<comment_status>]
: Whether the post can accept comments. Accepts 'open' or 'closed'. Default is the value of 'default_comment_status' option.

[\--ping_status=<ping_status>]
: Whether the post can accept pings. Accepts 'open' or 'closed'. Default is the value of 'default_ping_status' option.

[\--post_password=<post_password>]
: The password to access the post. Default empty.

[\--post_name=<post_name>]
: The post name. Default is the sanitized post title when creating a new post.

[\--from-post=<post_id>]
: Post id of a post to be duplicated.

[\--to_ping=<to_ping>]
: Space or carriage return-separated list of URLs to ping. Default empty.

[\--pinged=<pinged>]
: Space or carriage return-separated list of URLs that have been pinged. Default empty.

[\--post_modified=<post_modified>]
: The date when the post was last modified. Default is the current time.

[\--post_modified_gmt=<post_modified_gmt>]
: The date when the post was last modified in the GMT timezone. Default is the current time.

[\--post_parent=<post_parent>]
: Set this for the post it belongs to, if any. Default 0.

[\--menu_order=<menu_order>]
: The order the post should be displayed in. Default 0.

[\--post_mime_type=<post_mime_type>]
: The mime type of the post. Default empty.

[\--guid=<guid>]
: Global Unique ID for referencing the post. Default empty.

[\--post_category=<post_category>]
: Array of category names, slugs, or IDs. Defaults to value of the 'default_category' option.

[\--tags_input=<tags_input>]
: Array of tag names, slugs, or IDs. Default empty.

[\--tax_input=<tax_input>]
: Array of taxonomy terms keyed by their taxonomy name. Default empty.

[\--meta_input=<meta_input>]
: Array in JSON format of post meta values keyed by their post meta key. Default empty.

[<file>]
: Read post content from <file>. If this value is present, the
    `--post_content` argument will be ignored.

  Passing `-` as the filename will cause post content to
  be read from STDIN.

[\--<field>=<value>]
: Associative args for the new post. See wp_insert_post().

[\--edit]
: Immediately open system's editor to write or edit post content.

  If content is read from a file, from STDIN, or from the `--post_content`
  argument, that text will be loaded into the editor.

[\--porcelain]
: Output just the new post id.


### EXAMPLES

    # Create post and schedule for future
    $ wp post create --post_type=post --post_title='A future post' --post_status=future --post_date='2030-12-01 07:00:00'
    Success: Created post 1921.

    # Create post with content from given file
    $ wp post create ./post-content.txt --post_category=201,345 --post_title='Post from file'
    Success: Created post 1922.

    # Create a post with multiple meta values.
    $ wp post create --post_title='A post' --post_content='Just a small post.' --meta_input='{"key1":"value1","key2":"value2"}'
    Success: Created post 1923.

    # Create a duplicate post from existing posts.
    $ wp post create --from-post=123 --post_title='Different Title'
    Success: Created post 2350.

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
