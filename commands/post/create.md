# wp post create

Creates a new post.

### OPTIONS

[\--post_author=&lt;post_author&gt;]
: The ID of the user who added the post. Default is the current user ID.

[\--post_date=&lt;post_date&gt;]
: The date of the post. Default is the current time.

[\--post_date_gmt=&lt;post_date_gmt&gt;]
: The date of the post in the GMT timezone. Default is the value of $post_date.

[\--post_content=&lt;post_content&gt;]
: The post content. Default empty.

[\--post_content_filtered=&lt;post_content_filtered&gt;]
: The filtered post content. Default empty.

[\--post_title=&lt;post_title&gt;]
: The post title. Default empty.

[\--post_excerpt=&lt;post_excerpt&gt;]
: The post excerpt. Default empty.

[\--post_status=&lt;post_status&gt;]
: The post status. Default 'draft'.

[\--post_type=&lt;post_type&gt;]
: The post type. Default 'post'.

[\--comment_status=&lt;comment_status&gt;]
: Whether the post can accept comments. Accepts 'open' or 'closed'. Default is the value of 'default_comment_status' option.

[\--ping_status=&lt;ping_status&gt;]
: Whether the post can accept pings. Accepts 'open' or 'closed'. Default is the value of 'default_ping_status' option.

[\--post_password=&lt;post_password&gt;]
: The password to access the post. Default empty.

[\--post_name=&lt;post_name&gt;]
: The post name. Default is the sanitized post title when creating a new post.

[\--to_ping=&lt;to_ping&gt;]
: Space or carriage return-separated list of URLs to ping. Default empty.

[\--pinged=&lt;pinged&gt;]
: Space or carriage return-separated list of URLs that have been pinged. Default empty.

[\--post_modified=&lt;post_modified&gt;]
: The date when the post was last modified. Default is the current time.

[\--post_modified_gmt=&lt;post_modified_gmt&gt;]
: The date when the post was last modified in the GMT timezone. Default is the current time.

[\--post_parent=&lt;post_parent&gt;]
: Set this for the post it belongs to, if any. Default 0.

[\--menu_order=&lt;menu_order&gt;]
: The order the post should be displayed in. Default 0.

[\--post_mime_type=&lt;post_mime_type&gt;]
: The mime type of the post. Default empty.

[\--guid=&lt;guid&gt;]
: Global Unique ID for referencing the post. Default empty.

[\--post_category=&lt;post_category&gt;]
: Array of category names, slugs, or IDs. Defaults to value of the 'default_category' option.

[\--tags_input=&lt;tags_input&gt;]
: Array of tag names, slugs, or IDs. Default empty.

[\--tax_input=&lt;tax_input&gt;]
: Array of taxonomy terms keyed by their taxonomy name. Default empty.

[\--meta_input=&lt;meta_input&gt;]
: Array of post meta values keyed by their post meta key. Default empty.

[&lt;file&gt;]
: Read post content from &lt;file&gt;. If this value is present, the
    `--post_content` argument will be ignored.

  Passing `-` as the filename will cause post content to
  be read from STDIN.

[\--&lt;field&gt;=&lt;value&gt;]
: Associative args for the new post. See wp_insert_post().

[\--edit]
: Immediately open system's editor to write or edit post content.

  If content is read from a file, from STDIN, or from the `--post_content`
  argument, that text will be loaded into the editor.

[\--porcelain]
: Output just the new post id.


### EXAMPLES

    # Create post and schedule for future
    $ wp post create --post_type=page --post_title='A future post' --post_status=future --post_date='2020-12-01 07:00:00'
    Success: Created post 1921.

    # Create post with content from given file
    $ wp post create ./post-content.txt --post_category=201,345 --post_title='Post from file'
    Success: Created post 1922.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress install over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors; add verbosity to WP-CLI bootstrap. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
