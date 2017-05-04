# wp super-admin

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Asuper-admin+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage super admins on WordPress multisite.

### EXAMPLES

    # List user with super-admin capabilities
    $ wp super-admin list
    supervisor
    administrator

    # Grant super-admin privileges to the user.
    $ wp super-admin add superadmin2
    Success: Granted super-admin capabilities.

    # Revoke super-admin privileges to the user.
    $ wp super-admin remove superadmin2
    Success: Revoked super-admin capabilities.


