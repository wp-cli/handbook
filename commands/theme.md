# wp theme

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Atheme+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage themes.

### EXAMPLES

    # Install the latest version of a theme from wordpress.org and activate
    $ wp theme install twentysixteen --activate
    Installing Twenty Sixteen (1.2)
    Downloading install package from http://downloads.wordpress.org/theme/twentysixteen.1.2.zip...
    Unpacking the package...
    Installing the theme...
    Theme installed successfully.
    Activating 'twentysixteen'...
    Success: Switched to 'Twenty Sixteen' theme.

    # Get details of an installed theme
    $ wp theme get twentysixteen --fields=name,title,version
    +---------+----------------+
    | Field   | Value          |
    +---------+----------------+
    | name    | Twenty Sixteen |
    | title   | Twenty Sixteen |
    | version | 1.2            |
    +---------+----------------+

    # Get status of theme
    $ wp theme status twentysixteen
    Theme twentysixteen details:
    		Name: Twenty Sixteen
    		Status: Active
    		Version: 1.2
    		Author: the WordPress team


