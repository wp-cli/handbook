# wp theme install

Install a theme.

### OPTIONS

&lt;theme|zip|url&gt;...
: A theme slug, the path to a local zip file, or URL to a remote zip file.

[\--version=&lt;version&gt;]
: If set, get that particular version from wordpress.org, instead of the
stable version.

[\--force]
: If set, the command will overwrite any installed version of the theme, without prompting
for confirmation.

[\--activate]
: If set, the theme will be activated immediately after install.

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

    # Install from a local zip file
    $ wp theme install ../my-theme.zip

    # Install from a remote zip file
    $ wp theme install http://s3.amazonaws.com/bucketname/my-theme.zip?AWSAccessKeyId=123&amp;Expires=456&amp;Signature=abcdef

### GLOBAL PARAMETERS

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

