# wp post create

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Apost-create+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

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



