# wp config

Generates and reads the wp-config.php file.

### EXAMPLES

    # Create standard wp-config.php file.
    $ wp config create --dbname=testing --dbuser=wp --dbpass=securepswd --locale=ro_RO
    Success: Generated 'wp-config.php' file.

    # List constants and variables defined in wp-config.php file.
    $ wp config list
    +------------------+------------------------------------------------------------------+----------+
    | key              | value                                                            | type     |
    +------------------+------------------------------------------------------------------+----------+
    | table_prefix     | wp_                                                              | variable |
    | DB_NAME          | wp_cli_test                                                      | constant |
    | DB_USER          | root                                                             | constant |
    | DB_PASSWORD      | root                                                             | constant |
    | AUTH_KEY         | r6+@shP1yO&amp;$)1gdu.hl[/j;7Zrvmt~o;#WxSsa0mlQOi24j2cR,7i+QM/#7S:o^ | constant |
    | SECURE_AUTH_KEY  | iO-z!_m--YH$Tx2tf/&amp;V,YW*13Z_HiRLqi)d?$o-tMdY+82pK$`T.NYW~iTLW;xp | constant |
    +------------------+------------------------------------------------------------------+----------+

    # Get wp-config.php file path.
    $ wp config path
    /home/person/htdocs/project/wp-config.php

    # Get the table_prefix as defined in wp-config.php file.
    $ wp config get table_prefix
    wp_

    # Set the WP_DEBUG constant to true.
    $ wp config set WP_DEBUG true --raw
    Success: Updated the constant 'WP_DEBUG' in the 'wp-config.php' file with the raw value 'true'.

    # Delete the COOKIE_DOMAIN constant from the wp-config.php file.
    $ wp config delete COOKIE_DOMAIN
    Success: Deleted the constant 'COOKIE_DOMAIN' from the 'wp-config.php' file.

    # Launch system editor to edit wp-config.php file.
    $ wp config edit

    # Check whether the DB_PASSWORD constant exists in the wp-config.php file.
    $ wp config has DB_PASSWORD
    $ echo $?
    0

    # Assert if MULTISITE is true.
    $ wp config is-true MULTISITE
    $ echo $?
    0

    # Get new salts for your wp-config.php file.
    $ wp config shuffle-salts
    Success: Shuffled the salt keys.


