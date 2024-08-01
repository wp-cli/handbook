# wp comment

Creates, updates, deletes, and moderates comments.

### EXAMPLES

    # Create a new comment.
    $ wp comment create --comment_post_ID=15 --comment_content="hello blog" --comment_author="wp-cli"
    Success: Created comment 932.

    # Update an existing comment.
    $ wp comment update 123 --comment_author='That Guy'
    Success: Updated comment 123.

    # Delete an existing comment.
    $ wp comment delete 1337 --force
    Success: Deleted comment 1337.

    # Trash all spam comments.
    $ wp comment delete $(wp comment list --status=spam --format=ids)
    Success: Trashed comment 264.
    Success: Trashed comment 262.


