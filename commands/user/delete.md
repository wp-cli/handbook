# wp user delete

Delete one or more users from the current site.

On multisite, `wp user delete` only removes the user from the current
site. Include `--network` to also remove the user from the database, but
make sure to reassign their posts prior to deleting the user.

### OPTIONS

&lt;user&gt;...
: The user login, user email, or user ID of the user(s) to delete.

[\--network]
: On multisite, delete the user from the entire network.

[\--reassign=&lt;user-id&gt;]
: User ID to reassign the posts to.

[\--yes]
: Answer yes to any confirmation prompts.

### EXAMPLES

    # Delete user 123 and reassign posts to user 567
    $ wp user delete 123 --reassign=567
    Success: Removed user 123 from http://example.com

    # Delete all contributors and reassign their posts to user 2
    $ wp user delete $(wp user list --role=contributor --field=ID) --reassign=2
    Success: Removed user 813 from http://example.com
    Success: Removed user 578 from http://example.com


