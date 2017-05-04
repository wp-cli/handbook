# wp menu item

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Amenu-item+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

List, add, and delete items associated with a menu.

### EXAMPLES

    # Add an existing post to an existing menu
    $ wp menu item add-post sidebar-menu 33 --title="Custom Test Post"
    Success: Menu item added.

    # Create a new menu link item
    $ wp menu item add-custom sidebar-menu Apple http://apple.com
    Success: Menu item added.

    # Delete menu item
    $ wp menu item delete 45
    Success: 1 menu item deleted.




