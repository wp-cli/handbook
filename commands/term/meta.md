# wp term meta

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Aterm-meta+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage term custom fields.

### EXAMPLES

    # Set term meta
    $ wp term meta set 123 bio "Mary is a WordPress developer."
    Success: Updated custom field 'bio'.

    # Get term meta
    $ wp term meta get 123 bio
    Mary is a WordPress developer.

    # Update term meta
    $ wp term meta update 123 bio "Mary is an awesome WordPress developer."
    Success: Updated custom field 'bio'.

    # Delete term meta
    $ wp term meta delete 123 bio
    Success: Deleted custom field.




