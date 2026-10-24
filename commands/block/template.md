# wp block template

Retrieves details on block templates and template parts.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

Get information on block templates used in Full Site Editing (FSE) themes.

### EXAMPLES

    # List all templates
    $ wp block template list

    # List template parts for the header area
    $ wp block template list --type=wp_template_part --area=header

    # Get a specific template
    $ wp block template get twentytwentyfour//single


