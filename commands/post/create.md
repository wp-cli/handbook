# wp post create

Create a new post.

### OPTIONS

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

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

