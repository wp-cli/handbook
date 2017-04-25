# wp eval

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Aeval+sort%3Aupdated-desc">Github issues</a></small>

Execute arbitrary PHP code.

### OPTIONS

&lt;php-code&gt;
: The code to execute, as a string.

[\--skip-wordpress]
: Execute code without loading WordPress.

### EXAMPLES

    # Display WordPress content directory.
    $ wp eval 'echo WP_CONTENT_DIR;'
    /var/www/wordpress/wp-content

    # Generate a random number.
    $ wp eval 'echo rand();' --skip-wordpress
    479620423



