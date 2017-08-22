# wp cap

Adds to, removes from, and lists capabilities of a user role.

### EXAMPLES

    # Add 'spectate' capability to 'author' role.
    $ wp cap add 'author' 'spectate'
    Success: Added 1 capability to 'author' role.

    # Add all caps from 'editor' role to 'author' role.
    $ wp cap list 'editor' | xargs wp cap add 'author'
    Success: Added 24 capabilities to 'author' role.

    # Remove all caps from 'editor' role that also appear in 'author' role.
    $ wp cap list 'author' | xargs wp cap remove 'editor'
    Success: Removed 34 capabilities from 'editor' role.


