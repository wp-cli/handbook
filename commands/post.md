# wp post

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Apost+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage posts.

### EXAMPLES

    # Create a new post.
    $ wp post create --post_type=post --post_title='A sample post'
    Success: Created post 123.

    # Update an existing post.
    $ wp post update 123 --post_status=draft
    Success: Updated post 123.

    # Delete an existing post.
    $ wp post delete 123
    Success: Trashed post 123.


