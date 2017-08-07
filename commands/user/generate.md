# wp user generate

Generate some users.

Creates a specified number of new users with dummy data.

### OPTIONS

[\--count=&lt;number&gt;]
: How many users to generate?
\---
default: 100
\---

[\--role=&lt;role&gt;]
: The role of the generated users. Default: default role from WP

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: progress
options:
  - progress
  - ids
\---

### EXAMPLES

    # Add meta to every generated users.
    $ wp user generate --format=ids --count=3 | xargs -d ' ' -I % wp user meta add % foo bar
    Success: Added custom field.
    Success: Added custom field.
    Success: Added custom field.

### GLOBAL PARAMETERS

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

