# wp plugin delete

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Aplugin-delete+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Delete plugin files without deactivating or uninstalling.

### OPTIONS

&lt;plugin&gt;...
: One or more plugins to delete.

### EXAMPLES

    # Delete plugin
    $ wp plugin delete hello
    Deleted 'hello' plugin.
    Success: Deleted 1 of 1 plugins.

    # Delete inactive plugins
    $ wp plugin delete $(wp plugin list --status=inactive --field=name)
    Deleted 'tinymce-templates' plugin.
    Success: Deleted 1 of 1 plugins.


