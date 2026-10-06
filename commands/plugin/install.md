# wp plugin install

Installs one or more plugins.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

&lt;plugin|zip|url&gt;...
: One or more plugins to install. Accepts a plugin slug, the path to a local zip file, a URL to a remote zip file or PHP file, or a URL to a WordPress.org plugin directory.

[\--version=&lt;version&gt;]
: If set, get that particular version from wordpress.org, instead of the stable version.

[\--force]
: If set, the command will overwrite any installed version of the plugin, without prompting for confirmation.

[\--ignore-requirements]
: If set, the command will install the plugin while ignoring any WordPress or PHP version requirements specified by the plugin authors.

[\--activate]
: If set, the plugin will be activated immediately after install.

[\--activate-network]
: If set, the plugin will be network activated immediately after install

[\--insecure]
: Retry downloads without certificate validation if TLS handshake fails. Note: This makes the request vulnerable to a MITM attack.

[\--with-dependencies]
: If set, the command will also install all required dependencies of the plugin as specified in the 'Requires Plugins' header.

[\--slug=&lt;slug&gt;]
: Use this as the target directory name when installing from a zip file. Cannot be used when installing multiple plugins.

### EXAMPLES

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

    # Install the development version from wordpress.org
    $ wp plugin install bbpress --version=dev
    Installing bbPress (Development Version)
    Downloading install package from https://downloads.wordpress.org/plugin/bbpress.zip...
    Unpacking the package...
    Installing the plugin...
    Plugin installed successfully.
    Success: Installed 1 of 1 plugins.

    # Install from a local zip file
    $ wp plugin install ../my-plugin.zip
    Unpacking the package...
    Installing the plugin...
    Plugin installed successfully.
    Success: Installed 1 of 1 plugins.

    # Install from a remote zip file
    $ wp plugin install http://s3.amazonaws.com/bucketname/my-plugin.zip?AWSAccessKeyId=123&amp;Expires=456&amp;Signature=abcdef
    Downloading install package from http://s3.amazonaws.com/bucketname/my-plugin.zip?AWSAccessKeyId=123&amp;Expires=456&amp;Signature=abcdef
    Unpacking the package...
    Installing the plugin...
    Plugin installed successfully.
    Success: Installed 1 of 1 plugins.

    # Update from a remote zip file
    $ wp plugin install https://github.com/envato/wp-envato-market/archive/master.zip --force
    Downloading install package from https://github.com/envato/wp-envato-market/archive/master.zip
    Unpacking the package...
    Installing the plugin...
    Renamed Github-based project from 'wp-envato-market-master' to 'wp-envato-market'.
    Plugin updated successfully
    Success: Installed 1 of 1 plugins.

    # Forcefully re-install all installed plugins
    $ wp plugin install $(wp plugin list --field=name) --force
    Installing Akismet (3.1.11)
    Downloading install package from https://downloads.wordpress.org/plugin/akismet.3.1.11.zip...
    Unpacking the package...
    Installing the plugin...
    Removing the old version of the plugin...
    Plugin updated successfully
    Success: Installed 1 of 1 plugins.

    # Install from a remote PHP file
    $ wp plugin install https://example.com/my-plugin.php
    Installing My Plugin (1.0.0)
    Downloading plugin file from https://example.com/my-plugin.php...

    # Install a plugin with all its dependencies
    $ wp plugin install my-plugin --with-dependencies
    Installing Required Plugin 1 (1.2.3)
    Plugin installed successfully.
    Installing Required Plugin 2 (2.0.0)
    Plugin installed successfully.
    Installing My Plugin (3.5.0)
    Plugin installed successfully.
    Success: Installed 3 of 3 plugins.

    # Install from a WordPress.org plugin directory URL
    $ wp plugin install https://wordpress.org/plugins/akismet/
    Detected WordPress.org plugins directory URL, using slug: akismet
    Installing Akismet Anti-spam: Spam Protection (3.1.11)
    Downloading install package from https://downloads.wordpress.org/plugin/akismet.3.1.11.zip...
    Unpacking the package...
    Installing the plugin...
    Plugin installed successfully.
    Success: Installed 1 of 1 plugins.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
| `--ssh-args=<args>` | Pass additional arguments to SSH (or other tools specified by --ssh scheme). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
| `--alias=<name>` | Name of the alias to use. Aliases can reference local WordPress installations or remote SSH connections. Aliases are defined in the wp-cli.yml file. |
| `--assume-https` | Set $_SERVER['HTTPS'] to make WordPress treat the site as HTTPS. Use when WordPress is behind an HTTPS proxy or load balancer. |
