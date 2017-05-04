# wp role reset

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Arole-reset+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Reset any default role to default capabilities.

### OPTIONS

[&lt;role-key&gt;...]
: The internal name of one or more roles to reset.

[\--all]
: If set, all default roles will be reset.

### EXAMPLES

    # Reset role.
    $ wp role reset administrator author contributor
    Success: Reset 1/3 roles.

    # Reset all default roles.
    $ wp role reset --all
    Success: All default roles reset.


