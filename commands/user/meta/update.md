# wp user meta update

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Auser-meta-update+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Update a meta field.

### OPTIONS

&lt;user&gt;
: The user login, user email, or user ID of the user to update metadata for.

&lt;key&gt;
: The metadata key.

&lt;value&gt;
: The new metadata value.

[\--format=&lt;format&gt;]
: The serialization format for the value. Default is plaintext.

### EXAMPLES

    # Update user meta
    $ wp user meta update 123 bio "Mary is an awesome WordPress developer."
    Success: Updated custom field 'bio'.


