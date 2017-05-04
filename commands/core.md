# wp core

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acore+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Download, install, update and manage a WordPress install.

### EXAMPLES

    # Download WordPress core
    $ wp core download --locale=nl_NL
    Downloading WordPress 4.5.2 (nl_NL)...
    md5 hash verified: c5366d05b521831dd0b29dfc386e56a5
    Success: WordPress downloaded.

    # Install WordPress
    $ wp core install --url=example.com --title=Example --admin_user=supervisor --admin_password=strongpassword --admin_email=info@example.com
    Success: WordPress installed successfully.

    # Display the WordPress version
    $ wp core version
    4.5.2


