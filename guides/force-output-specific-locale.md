# Force output to a specific locale

WP-CLI always outputs English because it doesn't support localization. But, because WordPress supports localization, you may see non-English output when performing specific commands.

For instance:

    $ wp theme update --all
    מעבר למצב תחזוקה...
    מוריד עדכונים מ-https://downloads.wordpress.org/theme/hueman.3.3.25.zip...
    Using cached file '/home/xxx/.wp-cli/cache/theme/hueman-3.3.25.zip'...
    פתיחת עדכון...
    התקנת גרסה חדשה...
    הסרת הגרסה הקודמת של התבנית...
    התבנית עודכנה בהצלחה.
    ביטול מצב תחזוקה...
    +--------+-------------+-------------+---------+
    | name   | old_version | new_version | status  |
    +--------+-------------+-------------+---------+
    | hueman | 3.3.24      | 3.3.25      | Updated |
    +--------+-------------+-------------+---------+
    Success: Updated 1 of 1 themes.

To force WordPress to always output English at the command line, you need to filter the active locale.

Given a `force-locale.php` file:

    <?php
    WP_CLI::add_wp_hook( 'pre_option_WPLANG', function() {
	    return 'en_US';
    });

You can force the locale to `en_US` with:

    wp --require=force-locale.php

One nice thing about this approach is that you can easily apply it across multiple WP installs [using a config file](https://make.wordpress.org/cli/handbook/config/#config-files).
