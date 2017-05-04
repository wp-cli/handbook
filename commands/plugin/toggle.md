# wp plugin toggle

Toggle a plugin's activation state.

If the plugin is active, then it will be deactivated. If the plugin is
inactive, then it will be activated.

### OPTIONS

&lt;plugin&gt;...
: One or more plugins to toggle.

[\--network]
: If set, the plugin will be toggled for the entire multisite network.

### EXAMPLES

    # Akismet is currently activated
    $ wp plugin toggle akismet
    Plugin 'akismet' deactivated.
    Success: Toggled 1 of 1 plugins.

    # Akismet is currently deactivated
    $ wp plugin toggle akismet
    Plugin 'akismet' activated.
    Success: Toggled 1 of 1 plugins.


