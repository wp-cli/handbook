# wp user delete

Deletes one or more users from the current site.

On multisite, `wp user delete` only removes the user from the current site. Include `--network` to also remove the user from the database, but make sure to reassign their posts prior to deleting the user.

### OPTIONS

&lt;user&gt;...
: The user login, user email, or user ID of the user(s) to delete.

[\--network]
: On multisite, delete the user from the entire network.

[\--reassign=&lt;user-id&gt;]
: User ID to reassign the posts to.

[\--yes]
: Answer yes to any confirmation prompts.

### EXAMPLES

    # Delete user 123 and reassign posts to user 567
    $ wp user delete 123 --reassign=567
    Success: Removed user 123 from http://example.com

    # Delete all contributors and reassign their posts to user 2
    $ wp user delete $(wp user list --role=contributor --field=ID) --reassign=2
    Success: Removed user 813 from http://example.com
    Success: Removed user 578 from http://example.com

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress install over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors; add verbosity to WP-CLI bootstrap. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
