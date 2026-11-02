# wp ability category

Lists and inspects ability categories registered via the WordPress Abilities API.

> **Note:** This command is not part of a stable WP-CLI release yet. To use it now, [switch to the nightly build](https://make.wordpress.org/cli/handbook/guides/installing/#updating-wp-cli) with `wp cli update --nightly`. If you installed the command as a separate package, updating that package may be enough.

The Abilities API, introduced in WordPress 6.9, uses categories to organize related abilities for better discoverability.

### EXAMPLES

    # List all registered ability categories.
    $ wp ability category list
    +------+-------+-----------------------------------------------------+
    | slug | label | description                                         |
    +------+-------+-----------------------------------------------------+
    | site | Site  | Abilities that retrieve or modify site information. |
    | user | User  | Abilities that retrieve or modify user information. |
    +------+-------+-----------------------------------------------------+

    # Get details of a specific category.
    $ wp ability category get site
    +-------------+-----------------------------------------------------+
    | Field       | Value                                               |
    +-------------+-----------------------------------------------------+
    | slug        | site                                                |
    | label       | Site                                                |
    | description | Abilities that retrieve or modify site information. |
    | meta        | {}                                                  |
    +-------------+-----------------------------------------------------+

    # Check if a category exists.
    $ wp ability category exists site
    $ echo $?
    0




