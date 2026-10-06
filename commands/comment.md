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

    # Create a note for a block (WordPress 6.9+).
    $ wp comment create --comment_post_ID=15 --comment_content="This block needs revision" --comment_author="editor" --comment_type="note"
    Success: Created comment 945.

    # List notes for a specific post (WordPress 6.9+).
    $ wp comment list --type=note --post_id=15
    +------------+---------------------+----------------------------------+
    | comment_ID | comment_date        | comment_content                  |
    +------------+---------------------+----------------------------------+
    | 945        | 2024-11-10 14:30:00 | This block needs revision        |
    +------------+---------------------+----------------------------------+

    # Reply to a note (WordPress 6.9+).
    $ wp comment create --comment_post_ID=15 --comment_content="Updated per feedback" --comment_author="editor" --comment_type="note" --comment_parent=945
    Success: Created comment 946.

    # Resolve a note by adding a comment with status meta (WordPress 6.9+).
    $ wp comment create --comment_post_ID=15 --comment_content="Resolving" --comment_author="editor" --comment_type="note" --comment_parent=945 --porcelain
    947
    $ wp comment meta add 947 _wp_note_status resolved
    Success: Added custom field.

    # Reopen a resolved note (WordPress 6.9+).
    $ wp comment create --comment_post_ID=15 --comment_content="Reopening for further review" --comment_author="editor" --comment_type="note" --comment_parent=945 --porcelain
    948
    $ wp comment meta add 948 _wp_note_status reopen
    Success: Added custom field.


