# wp shell

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Ashell+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Interactive PHP console.

`wp shell` allows you to evaluate PHP statements and expressions
interactively, from within a WordPress environment. Type a bit of code,
hit enter, and see the code execute right before you. Because WordPress
is loaded, you have access to all the functions, classes and globals
that you can use within a WordPress plugin, for example.

### OPTIONS

[\--basic]
: Start in fail-safe mode, even if Boris is available.

### EXAMPLES

    # Call get_bloginfo() to get the name of the site.
    $ wp shell
    wp> get_bloginfo( 'name' );
    => string(6) "WP-CLI"


