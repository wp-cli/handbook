# wp site

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Asite+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Perform site-wide operations.

### EXAMPLES

    # Create site
    $ wp site create --slug=example
    Success: Site 3 created: www.example.com/example/

    # Output a simple list of site URLs
    $ wp site list --field=url
    http://www.example.com/
    http://www.example.com/subdir/

    # Delete site
    $ wp site delete 123
    Are you sure you want to delete the 'http://www.example.com/example' site? [y/n] y
    Success: The site at 'http://www.example.com/example' was deleted.


