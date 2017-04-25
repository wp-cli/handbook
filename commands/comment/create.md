# wp comment create

<small>[Commands](/commands/) &raquo; [comment](/commands/comment/) &raquo; create</small>

`wp comment create` - Create a new comment.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Acomment-create+sort%3Aupdated-desc">Github issues</a></small>

<hr />

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: Associative args for the new comment. See wp_insert_comment().

[\--porcelain]
: Output just the new comment id.

### EXAMPLES

    # Create comment.
    $ wp comment create --comment_post_ID=15 --comment_content="hello blog" --comment_author="wp-cli"
    Success: Created comment 932.



