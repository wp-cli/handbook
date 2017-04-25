# wp theme path

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Atheme-path+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Get the path to a theme or to the theme directory.

### OPTIONS

[&lt;theme&gt;]
: The theme to get the path to. Path includes "style.css" file.
If not set, will return the path to the themes directory.

[\--dir]
: If set, get the path to the closest parent directory, instead of the
theme's "style.css" file.

### EXAMPLES

    # Get theme path
    $ wp theme path
    /var/www/example.com/public_html/wp-content/themes

    # Change directory to theme path
    $ cd $(wp theme path)



