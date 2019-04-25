# wp cli alias

Retrieves, sets and updates aliases for WordPress Installations.

Aliases are shorthand references to WordPress installs. For instance, `@dev` could refer to a development install and `@prod` could refer to a production install. This command gives you and option to add, update and delete, the registered aliases you have available.

### EXAMPLES

    # List alias information.
    $ wp cli alias list
    list
    ---
    @all: Run command against every registered alias.
    @local:
      user: wpcli
      path: /Users/wpcli/sites/testsite

    # Get alias information.
    $ wp cli alias get @dev
    ssh: dev@somedeve.env:12345/home/dev/

    # Add alias.
    $ wp cli alias add prod --set-ssh=login@host --set-path=/path/to/wordpress/install/ --set-user=wpcli
    Success: Added '@prod' alias.

    # Update alias.
    $ wp cli alias update @prod --set-user=newuser --set-path=/new/path/to/wordpress/install/
    Success: Updated 'prod' alias.

    # Delete alias.
    $ wp cli alias delete @prod
    Success: Deleted '@prod' alias.




