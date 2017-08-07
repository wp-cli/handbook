# wp post delete

Delete an existing post.

### OPTIONS

&lt;id&gt;...
: One or more IDs of posts to delete.

[\--force]
: Skip the trash bin.

[\--defer-term-counting]
: Recalculate term count in batch, for a performance boost.

### EXAMPLES

    # Delete post skipping trash
    $ wp post delete 123 --force
    Success: Deleted post 123.

    # Delete all pages
    $ wp post delete $(wp post list --post_type='page' --format=ids)
    Success: Trashed post 1164.
    Success: Trashed post 1186.

    # Delete all posts in the trash
    $ wp post delete $(wp post list --post_status=trash --format=ids)
    Success: Trashed post 1268.
    Success: Trashed post 1294.

### GLOBAL PARAMETERS

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

