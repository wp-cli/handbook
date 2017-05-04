# wp site option

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Asite-option+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage site options in a multisite install.

### EXAMPLES

    # Get site registration
    $ wp site option get registration
    none

    # Add site option
    $ wp site option add my_option foobar
    Success: Added 'my_option' site option.

    # Update site option
    $ wp site option update my_option '{"foo": "bar"}' --format=json
    Success: Updated 'my_option' site option.

    # Delete site option
    $ wp site option delete my_option
    Success: Deleted 'my_option' site option.




