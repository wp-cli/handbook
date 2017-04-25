# wp theme is-installed

<small>[Commands](/commands/) &raquo; [theme](/commands/theme/) &raquo; is-installed</small>

`wp theme is-installed` - Check if the theme is installed.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atheme-is-installed+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Returns exit code 0 when installed, 1 when uninstalled.

### OPTIONS

&lt;theme&gt;
: The theme to check.

### EXAMPLES

    # Check whether theme is installed; exit status 0 if installed, otherwise 1
    $ wp theme is-installed hello
    $ echo $?
    1



