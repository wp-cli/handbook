# wp role create

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Arole-create+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Create a new role.

### OPTIONS

&lt;role-key&gt;
: The internal name of the role.

&lt;role-name&gt;
: The publicly visible name of the role.

[\--clone=&lt;role&gt;]
: Clone capabilities from an existing role.

### EXAMPLES

    # Create role for Approver.
    $ wp role create approver Approver
    Success: Role with key 'approver' created.

    # Create role for Product Administrator.
    $ wp role create productadmin "Product Administrator"
    Success: Role with key 'productadmin' created.


