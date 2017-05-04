# wp comment create

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acomment-create+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Create a new comment.

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: Associative args for the new comment. See wp_insert_comment().

[\--porcelain]
: Output just the new comment id.

### EXAMPLES

    # Create comment.
    $ wp comment create --comment_post_ID=15 --comment_content="hello blog" --comment_author="wp-cli"
    Success: Created comment 932.


