# wp option update

Update an option value.

### OPTIONS

&lt;key&gt;
: The name of the option to update.

[&lt;value&gt;]
: The new value. If ommited, the value is read from STDIN.

[\--autoload=&lt;autoload&gt;]
: Requires WP 4.2. Should this option be automatically loaded.
\---
options:
  - 'yes'
  - 'no'
\---

[\--format=&lt;format&gt;]
: The serialization format for the value.
\---
default: plaintext
options:
  - plaintext
  - json
\---

### EXAMPLES

    # Update an option by reading from a file.
    $ wp option update my_option < value.txt
    Success: Updated 'my_option' option.

    # Update one option on multiple sites using xargs.
    $ wp site list --field=url | xargs -n1 -I {} sh -c 'wp --url={} option update my_option my_value'
    Success: Updated 'my_option' option.
    Success: Updated 'my_option' option.

    # Update site blog name.
    $ wp option update blogname "Random blog name"
    Success: Updated 'blogname' option.

    # Update site blog description.
    $ wp option update blogdescription "Some random blog description"
    Success: Updated 'blogdescription' option.

    # Update admin email address.
    $ wp option update admin_email someone@example.com
    Success: Updated 'admin_email' option.

    # Set the default role.
    $ wp option update default_role author
    Success: Updated 'default_role' option.

    # Set the timezone string.
    $ wp option update timezone_string "America/New_York"
    Success: Updated 'timezone_string' option.

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

