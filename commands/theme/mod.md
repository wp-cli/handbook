# wp theme mod

Sets, gets, and removes theme mods.

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




