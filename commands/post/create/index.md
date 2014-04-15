---
layout: default
title: 'wp post create'
---

`wp post create` - Create a post.

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

    wp post create --post_type=page --post_status=publish --post_title='A future post' --post-status=future --post_date='2020-12-01 07:00:00'

    wp post create ./post-content.txt --post_category=201,345 --post_title='Post from file'

