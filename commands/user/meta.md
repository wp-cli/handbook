# wp user meta

Manage user custom fields.

### EXAMPLES

    # Add user meta
    $ wp user meta add 123 bio "Mary is an WordPress developer."
    Success: Added custom field.

    # List user meta
    $ wp user meta list 123 --keys=nickname,description,wp_capabilities
    +---------+-----------------+--------------------------------+
    | user_id | meta_key        | meta_value                     |
    +---------+-----------------+--------------------------------+
    | 123     | nickname        | supervisor                     |
    | 123     | description     | Mary is a WordPress developer. |
    | 123     | wp_capabilities | {"administrator":true}         |
    +---------+-----------------+--------------------------------+

    # Update user meta
    $ wp user meta update 123 bio "Mary is an awesome WordPress developer."
    Success: Updated custom field 'bio'.

    # Delete user meta
    $ wp user meta delete 123 bio
    Success: Deleted custom field.




