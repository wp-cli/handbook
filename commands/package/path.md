# wp package path

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Apackage-path+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Get the path to an installed WP-CLI package, or the package directory.

If you want to contribute to a package, this is a great way to jump to it.

### OPTIONS

[&lt;name&gt;]
: Name of the package to get the directory for.

### EXAMPLES

    # Get package path
    $ wp package path
    /home/person/.wp-cli/packages/

    # Change directory to package path
    $ cd $(wp package path) &amp;&amp; pwd
    /home/vagrant/.wp-cli/packages



