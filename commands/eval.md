# wp eval

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


