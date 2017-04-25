# wp plugin is-installed

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Aplugin-is-installed+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Check if the plugin is installed.

Returns exit code 0 when installed, 1 when uninstalled.

### OPTIONS

&lt;plugin&gt;
: The plugin to check.

### EXAMPLES

    # Check whether plugin is installed; exit status 0 if installed, otherwise 1
    $ wp plugin is-installed hello
    $ echo $?
    1



