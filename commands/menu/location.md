# wp menu location

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Amenu-location+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage a menu's assignment to locations.

### EXAMPLES

    # List available menu locations
    $ wp menu location list
    +----------+-------------------+
    | location | description       |
    +----------+-------------------+
    | primary  | Primary Menu      |
    | social   | Social Links Menu |
    +----------+-------------------+

    # Assign the 'primary-menu' menu to the 'primary' location
    $ wp menu location assign primary-menu primary
    Success: Assigned location to menu.

    # Remove the 'primary-menu' menu from the 'primary' location
    $ wp menu location remove primary-menu primary
    Success: Removed location from menu.




