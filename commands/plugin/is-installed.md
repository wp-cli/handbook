# wp plugin is-installed

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


