# wp scaffold

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Ascaffold+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Generate code for post types, taxonomies, plugins, child themes, etc.

### EXAMPLES

    # Generate a new plugin with unit tests
    $ wp scaffold plugin sample-plugin
    Success: Created plugin files.
    Success: Created test files.

    # Generate theme based on _s
    $ wp scaffold _s sample-theme --theme_name="Sample Theme" --author="John Doe"
    Success: Created theme 'Sample Theme'.

    # Generate code for post type registration in given theme
    $ wp scaffold post-type movie --label=Movie --theme=simple-life
    Success: Created /var/www/example.com/public_html/wp-content/themes/simple-life/post-types/movie.php


