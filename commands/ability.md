# wp ability

Lists, inspects, and executes abilities registered via the WordPress Abilities API.

The Abilities API, introduced in WordPress 6.9, provides a standardized way to register and discover distinct units of functionality within a WordPress site.

### EXAMPLES

    # List all registered abilities.
    $ wp ability list
    +---------------------------+----------------------+----------+------------------------------------------+
    | name                      | label                | category | description                              |
    +---------------------------+----------------------+----------+------------------------------------------+
    | core/get-site-info        | Get Site Information | site     | Returns site information configured i... |
    | core/get-user-info        | Get User Information | user     | Returns basic profile details for the... |
    | core/get-environment-info | Get Environment Info | site     | Returns core details about the site's... |
    +---------------------------+----------------------+----------+------------------------------------------+

    # Get details of a specific ability.
    $ wp ability get core/get-site-info --fields=name,label,category,readonly,show_in_rest
    +---------------+----------------------+
    | Field         | Value                |
    +---------------+----------------------+
    | name          | core/get-site-info   |
    | label         | Get Site Information |
    | category      | site                 |
    | readonly      | 1                    |
    | show_in_rest  | 1                    |
    +---------------+----------------------+

    # Execute an ability with JSON input (required for array values).
    $ wp ability run core/get-site-info --input='{"fields":["name","version"]}' --user=admin
    {
        "name": "Test Blog",
        "version": "6.9"
    }

    # Check if an ability exists.
    $ wp ability exists core/get-site-info
    $ echo $?
    0

    # Check if user can run an ability.
    $ wp ability can-run core/get-site-info
    $ echo $?
    0

    # Validate input before execution.
    $ wp ability validate core/get-site-info --input='{"fields":["name","version"]}'
    Success: Input is valid.


