# wp user

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Auser+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage users.

### EXAMPLES

    # List user IDs
    $ wp user list --field=ID
    1

    # Create a new user.
    $ wp user create bob bob@example.com --role=author
    Success: Created user 3.
    Password: k9**&amp;I4vNH(&amp;

    # Update an existing user.
    $ wp user update 123 --display_name=Mary --user_pass=marypass
    Success: Updated user 123.

    # Delete user 123 and reassign posts to user 567
    $ wp user delete 123 --reassign=567
    Success: Removed user 123 from http://example.com


