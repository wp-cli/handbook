# wp post update

Update one or more existing posts.

### OPTIONS

&lt;id&gt;...
: One or more IDs of posts to update.

[&lt;file&gt;]
: Read post content from &lt;file&gt;. If this value is present, the
    `--post_content` argument will be ignored.

  Passing `-` as the filename will cause post content to
  be read from STDIN.

\--&lt;field&gt;=&lt;value&gt;
: One or more fields to update. See wp_update_post().

[\--defer-term-counting]
: Recalculate term count in batch, for a performance boost.

### EXAMPLES

    $ wp post update 123 --post_name=something --post_status=draft
    Success: Updated post 123.


