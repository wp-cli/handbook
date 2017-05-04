# wp plugin deactivate

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Aplugin-deactivate+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Deactivate a plugin.

### OPTIONS

[&lt;plugin&gt;...]
: One or more plugins to deactivate.

[\--uninstall]
: Uninstall the plugin after deactivation.

[\--all]
: If set, all plugins will be deactivated.

[\--network]
: If set, the plugin will be deactivated for the entire multisite network.

### EXAMPLES

    # Deactivate plugin
    $ wp plugin deactivate hello
    Plugin 'hello' deactivated.
    Success: Deactivated 1 of 1 plugins.


