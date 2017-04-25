# wp role delete

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Arole-delete+sort%3Aupdated-desc">Github issues</a></small>

Delete an existing role.

### OPTIONS

&lt;role-key&gt;
: The internal name of the role.

### EXAMPLES

    # Delete approver role.
    $ wp role delete approver
    Success: Role with key 'approver' deleted.

    # Delete productadmin role.
    wp role delete productadmin
    Success: Role with key 'productadmin' deleted.



