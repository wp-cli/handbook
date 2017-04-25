# wp user meta delete

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Auser-meta-delete+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Delete a meta field.

### OPTIONS

&lt;user&gt;
: The user login, user email, or user ID of the user to delete metadata from.

&lt;key&gt;
: The metadata key.

[&lt;value&gt;]
: The value to delete. If omitted, all rows with key will deleted.

### EXAMPLES

    # Delete user meta
    $ wp user meta delete 123 bio
    Success: Deleted custom field.



