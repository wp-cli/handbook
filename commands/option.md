# wp option

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Aoption+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage options.

### EXAMPLES

    # Get site URL.
    $ wp option get siteurl
    http://example.com

    # Add option.
    $ wp option add my_option foobar
    Success: Added 'my_option' option.

    # Update option.
    $ wp option update my_option '{"foo": "bar"}' --format=json
    Success: Updated 'my_option' option.

    # Delete option.
    $ wp option delete my_option
    Success: Deleted 'my_option' option.


