# wp role

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Arole+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage user roles.

### EXAMPLES

    # List roles.
    $ wp role list --fields=role --format=csv
    role
    administrator
    editor
    author
    contributor
    subscriber

    # Check to see if a role exists.
    $ wp role exists editor
    Success: Role with ID 'editor' exists.

    # Create a new role.
    $ wp role create approver Approver
    Success: Role with key 'approver' created.

    # Delete an existing role.
    $ wp role delete approver
    Success: Role with key 'approver' deleted.

    # Reset existing roles to their default capabilities.
    $ wp role reset administrator author contributor
    Success: Reset 3/3 roles.


