# wp core install

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Acore-install+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Runs the standard WordPress installation process.

Creates the WordPress tables in the database using the URL, title, and
default admin user details provided. Performs the famous 5 minute install
in seconds or less.

Note: if you've installed WordPress in a subdirectory, then you'll need
to `wp option update siteurl` after `wp core install`. For instance, if
WordPress is installed in the `/wp` directory and your domain is wp.dev,
then you'll need to run `wp option update siteurl http://wp.dev/wp` for
your WordPress install to function properly.

Note: When using custom user tables (e.g. `CUSTOM_USER_TABLE`), the admin
email and password are ignored if the user_login already exists. If the
user_login doesn't exist, a new user will be created.

### OPTIONS

\--url=&lt;url&gt;
: The address of the new site.

\--title=&lt;site-title&gt;
: The title of the new site.

\--admin_user=&lt;username&gt;
: The name of the admin user.

[\--admin_password=&lt;password&gt;]
: The password for the admin user. Defaults to randomly generated string.

\--admin_email=&lt;email&gt;
: The email address for the admin user.

[\--skip-email]
: Don't send an email notification to the new admin user.

### EXAMPLES

    # Install WordPress in 5 seconds
    $ wp core install --url=example.com --title=Example --admin_user=supervisor --admin_password=strongpassword --admin_email=info@example.com
    Success: WordPress installed successfully.

    # Install WordPress without disclosing admin_password to bash history
    $ wp core install --url=example.com --title=Example --admin_user=supervisor --admin_email=info@example.com --prompt=admin_password < admin_password.txt



