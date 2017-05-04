# wp plugin

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Aplugin+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage plugins.

### EXAMPLES

    # Activate plugin
    $ wp plugin activate hello
    Plugin 'hello' activated.
    Success: Activated 1 of 1 plugins.

    # Deactivate plugin
    $ wp plugin deactivate hello
    Plugin 'hello' deactivated.
    Success: Deactivated 1 of 1 plugins.

    # Delete plugin
    $ wp plugin delete hello
    Deleted 'hello' plugin.
    Success: Deleted 1 of 1 plugins.

    # Install the latest version from wordpress.org and activate
    $ wp plugin install bbpress --activate
    Installing bbPress (2.5.9)
    Downloading install package from https://downloads.wordpress.org/plugin/bbpress.2.5.9.zip...
    Using cached file '/home/vagrant/.wp-cli/cache/plugin/bbpress-2.5.9.zip'...
    Unpacking the package...
    Installing the plugin...
    Plugin installed successfully.
    Activating 'bbpress'...
    Plugin 'bbpress' activated.
    Success: Installed 1 of 1 plugins.


