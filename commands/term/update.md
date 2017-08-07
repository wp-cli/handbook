# wp term update

Update an existing term.

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy of the term to update.

&lt;term&gt;
: ID or slug for the term to update.

[\--by=&lt;field&gt;]
: Explicitly handle the term value as a slug or id.
\---
default: id
options:
  - slug
  - id
\---

[\--name=&lt;name&gt;]
: A new name for the term.

[\--slug=&lt;slug&gt;]
: A new slug for the term.

[\--description=&lt;description&gt;]
: A new description for the term.

[\--parent=&lt;term-id&gt;]
: A new parent for the term.

### EXAMPLES

    # Change category with id 15 to use the name "Apple"
    $ wp term update category 15 --name=Apple
    Success: Term updated.

    # Change category with slug apple to use the name "Apple"
    $ wp term update category apple --by=slug --name=Apple
    Success: Term updated.

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

