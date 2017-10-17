# wp role

Manages user roles, including creating new roles and resetting to defaults.

See references for [Roles and Capabilities](https://codex.wordpress.org/Roles_and_Capabilities) and [WP User class](https://codex.wordpress.org/Class_Reference/WP_User).

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


