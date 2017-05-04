# wp user session destroy

Destroy a session for the given user.

### OPTIONS

&lt;user&gt;
: User ID, user email, or user login.

[&lt;token&gt;]
: The token of the session to destroy. Defaults to the most recently created session.

[\--all]
: Destroy all of the user's sessions.

### EXAMPLES

    # Destroy the most recent session of the given user.
    $ wp user session destroy admin
    Success: Destroyed session. 3 sessions remaining.

    # Destroy a specific session of the given user.
    $ wp user session destroy admin e073ad8540a9c2...
    Success: Destroyed session. 2 sessions remaining.

    # Destroy all the sessions of the given user.
    $ wp user session destroy admin --all
    Success: Destroyed all sessions.

    # Destroy all sessions for all users.
    $ wp user list --field=ID | xargs wp user session destroy --all
    Success: Destroyed all sessions.
    Success: Destroyed all sessions.


