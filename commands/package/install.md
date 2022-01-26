# wp package install

Installs a WP-CLI package.

Packages are required to be a valid Composer package, and can be specified as:

* Package name from WP-CLI's package index.
* Git URL accessible by the current shell user.
* Path to a directory on the local machine.
* Local or remote .zip file.

Packages are installed to `~/.wp-cli/packages/` by default. Use the `WP_CLI_PACKAGES_DIR` environment variable to provide a custom path.

When installing a local directory, WP-CLI simply registers a reference to the directory. If you move or delete the directory, WP-CLI's reference breaks.

When installing a .zip file, WP-CLI extracts the package to `~/.wp-cli/packages/local/&lt;package-name&gt;`.

### OPTIONS

&lt;name|git|path|zip&gt;
: Name, git URL, directory path, or .zip file for the package to install. Names can optionally include a version constraint (e.g. wp-cli/server-command:@stable).

[\--insecure]
: Retry downloads without certificate validation if TLS handshake fails. Note: This makes the request vulnerable to a MITM attack.

### EXAMPLES

    # Install a package hosted at a git URL.
    $ wp package install runcommand/hook

    # Install the latest stable version.
    $ wp package install wp-cli/server-command:@stable

    # Install a package hosted at a GitLab.com URL.
    $ wp package install https://gitlab.com/foo/wp-cli-bar-command.git

    # Install a package in a .zip file.
    $ wp package install google-sitemap-generator-cli.zip

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
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
