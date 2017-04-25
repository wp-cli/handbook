# wp cache type

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acache-type+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Attempts to determine which object cache is being used.

Note that the guesses made by this function are based on the
WP_Object_Cache classes that define the 3rd party object cache extension.
Changes to those classes could render problems with this function's
ability to determine which object cache is being used.

### EXAMPLES

    # Check cache type.
    $ wp cache type
    Default



