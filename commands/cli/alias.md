# wp cli alias

Retrieves, sets and updates aliases for WordPress Installations.

Unless overridden, these commands run on the `before_wp_load` hook, just before the WP load process begins.

Aliases are shorthand references to WordPress installs. For instance, `@dev` could refer to a development install and `@prod` could refer to a production install. This command gives you an option to add, update and delete, the registered aliases you have available.

Environment variables can be used in alias definitions using the syntax `${env.VARIABLE_NAME}`. This allows you to centralize configuration in environment variables or .env files.

### SECURITY CONSIDERATIONS

When environment variables are used in aliases, their interpolated values will appear in command output (e.g., `wp cli alias list` or `wp cli alias get`). If you have sensitive data in environment variables (such as passwords or API keys), be aware that these values may be exposed in:

- Terminal output when listing or viewing aliases
- Log files if command output is redirected
- Shell history if used in command arguments

To view aliases without interpolating environment variables, use the `--raw` flag.

Learn more about [running commands remotely](https://make.wordpress.org/cli/handbook/guides/running-commands-remotely/).

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
    $ wp cli alias add @prod --set-ssh=login@host --set-path=/path/to/wordpress/install/ --set-user=wpcli
    Success: Added '@prod' alias.

    # Update alias.
    $ wp cli alias update @prod --set-user=newuser --set-path=/new/path/to/wordpress/install/
    Success: Updated 'prod' alias.

    # Delete alias.
    $ wp cli alias delete @prod
    Success: Deleted '@prod' alias.

    # Use environment variables in alias definitions.
    # In wp-cli.yml:
    # @prod:
    #   ssh: ${env.PROD_USER}@${env.PROD_HOST}:${env.PROD_PATH}
    #   user: ${env.PROD_WP_USER}
    $ export PROD_USER=myuser PROD_HOST=example.com PROD_PATH=/var/www PROD_WP_USER=admin
    $ wp @prod option get home

    # View aliases without environment variable interpolation.
    $ wp cli alias list --raw

    # Run a command against a group of aliases in parallel.
    $ WP_CLI_ALIAS_GROUPS_PARALLEL=1 wp @all plugin status




