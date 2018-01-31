# wp user session

Destroys and lists a user's sessions.

### EXAMPLES

    # List a user's sessions.
    $ wp user session list admin@example.com --format=csv
    login_time,expiration_time,ip,ua
    "2016-01-01 12:34:56","2016-02-01 12:34:56",127.0.0.1,"Mozilla/5.0..."

    # Destroy the most recent session of the given user.
    $ wp user session destroy admin
    Success: Destroyed session. 3 sessions remaining.




