# wp theme install

Installs one or more themes.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

<theme|zip|url>...
: One or more themes to install. Accepts a theme slug, the path to a local zip file, or a URL to a remote zip file.

[\--version=<version>]
: If set, get that particular version from wordpress.org, instead of the stable version.

[\--force]
: If set, the command will overwrite any installed version of the theme, without prompting for confirmation.

[\--ignore-requirements]
: If set, the command will install the theme while ignoring any WordPress or PHP version requirements specified by the theme authors.

[\--activate]
: If set, the theme will be activated immediately after install.

[\--insecure]
: Retry downloads without certificate validation if TLS handshake fails. Note: This makes the request vulnerable to a MITM attack.

### EXAMPLES

    # Install the latest version from wordpress.org and activate
    $ wp theme install twentysixteen --activate
    Installing Twenty Sixteen (1.2)
    Downloading install package from http://downloads.wordpress.org/theme/twentysixteen.1.2.zip...
    Unpacking the package...
    Installing the theme...
    Theme installed successfully.
    Activating 'twentysixteen'...
    Success: Switched to 'Twenty Sixteen' theme.
    Success: Installed 1 of 1 themes.

    # Install from a local zip file
    $ wp theme install ../my-theme.zip

    # Install from a remote zip file
    $ wp theme install http://s3.amazonaws.com/bucketname/my-theme.zip?AWSAccessKeyId=123&amp;Expires=456&amp;Signature=abcdef

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
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
