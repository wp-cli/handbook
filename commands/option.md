# wp option

Retrieves and sets site options, including plugin and WordPress settings.

See the [Plugin Settings API](https://developer.wordpress.org/plugins/settings/settings-api/) and the 
[Theme Options](https://developer.wordpress.org/themes/customize-api/) for more information on adding customized options.

### Examples

    # Get site URL.
    $ wp option get siteurl
    http://example.com

    # Add option.
    $ wp option add my_option foobar
    Success: Added 'my_option' option.

    # Update option.
    $ wp option update my_option '{"foo": "bar"}' --format=json
    Success: Updated 'my_option' option.

    # Delete option.
    $ wp option delete my_option
    Success: Deleted 'my_option' option.


