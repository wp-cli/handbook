# wp plugin path

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aplugin-path+sort%3Aupdated-desc">Github issues</a></small>

Get the path to a plugin or to the plugin directory.

### OPTIONS

[&lt;plugin&gt;]
: The plugin to get the path to. If not set, will return the path to the
plugins directory.

[\--dir]
: If set, get the path to the closest parent directory, instead of the
plugin file.

### EXAMPLES

    $ cd $(wp plugin path) &amp;&amp; pwd
    /var/www/wordpress/wp-content/plugins



