# wp menu

Lists, creates, assigns, and deletes the active theme's navigation menus.

See the [Navigation Menus](https://developer.wordpress.org/themes/functionality/navigation-menus/) reference in the Theme Handbook.

### EXAMPLES

    # Create a new menu
    $ wp menu create "My Menu"
    Success: Created menu 200.

    # List existing menus
    $ wp menu list
    +---------+----------+----------+-----------+-------+
    | term_id | name     | slug     | locations | count |
    +---------+----------+----------+-----------+-------+
    | 200     | My Menu  | my-menu  |           | 0     |
    | 177     | Top Menu | top-menu | primary   | 7     |
    +---------+----------+----------+-----------+-------+

    # Create a new menu link item
    $ wp menu item add-custom my-menu Apple http://apple.com --porcelain
    1922

    # Assign the 'my-menu' menu to the 'primary' location
    $ wp menu location assign my-menu primary
    Success: Assigned location primary to menu my-menu.


