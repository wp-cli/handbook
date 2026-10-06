# wp option

Retrieves and sets site options, including plugin and WordPress settings.

See the [Plugin Settings API](https://developer.wordpress.org/plugins/settings/settings-api/) and the [Theme Options](https://developer.wordpress.org/themes/customize-api/) for more information on adding customized options.

### COMMON OPTIONS

These are some of the most commonly used WordPress options:

* `siteurl` - Site URL, e.g. http://example.com
* `blogname` - Site title
* `blogdescription` - Site tagline
* `admin_email` - Administration email address
* `default_role` - Default role for new users
* `timezone_string` - Local timezone, e.g. "America/New_York"
* `home` - Home URL, e.g. http://example.com
* `blog_public` - Discourage search engines when set to 0

For the full list of available options, see the [Option Reference](https://developer.wordpress.org/apis/options/).

### EXAMPLES

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


