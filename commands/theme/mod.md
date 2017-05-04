# wp theme mod

<small>Quick links: <a href="https://github.com/issues?q=is%3Aopen+label%3Acommand%3Atheme-mod+sort%3Aupdated-desc+org%3Awp-cli">Github issues</a></small>

Manage theme mods.

### EXAMPLES

    # Set the 'background_color' theme mod to '000000'.
    $ wp theme mod set background_color 000000
    Success: Theme mod background_color set to 000000

    # Get single theme mod in JSON format.
    $ wp theme mod get background_color --format=json
    [{"key":"background_color","value":"dd3333"}]

    # Remove all theme mods.
    $ wp theme mod remove --all
    Success: Theme mods removed.




