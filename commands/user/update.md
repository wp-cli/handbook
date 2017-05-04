# wp user update

Update an existing user.

### OPTIONS

&lt;user&gt;...
: The user login, user email or user ID of the user(s) to update.

\--&lt;field&gt;=&lt;value&gt;
: One or more fields to update. For accepted fields, see wp_update_user().

### EXAMPLES

    # Update user
    $ wp user update 123 --display_name=Mary --user_pass=marypass
    Success: Updated user 123.


