# wp cap remove

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acap-remove+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Remove capabilities from a given role.

### OPTIONS

&lt;role&gt;
: Key for the role.

&lt;cap&gt;...
: One or more capabilities to remove.

### EXAMPLES

    # Remove 'spectate' capability from 'author' role.
    $ wp cap remove author spectate
    Success: Removed 1 capability from 'author' role.


