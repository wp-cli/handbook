# wp term create

Create a new term.

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy for the new term.

&lt;term&gt;
: A name for the new term.

[\--slug=&lt;slug&gt;]
: A unique slug for the new term. Defaults to sanitized version of name.

[\--description=&lt;description&gt;]
: A description for the new term.

[\--parent=&lt;term-id&gt;]
: A parent for the new term.

[\--porcelain]
: Output just the new term id.

### EXAMPLES

    # Create a new category "Apple" with a description.
    $ wp term create category Apple --description="A type of fruit"
    Success: Created category 199.

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

