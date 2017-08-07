# wp term delete

Delete an existing term.

Errors if the term doesn't exist, or there was a problem in deleting it.

### OPTIONS

&lt;taxonomy&gt;
: Taxonomy of the term to delete.

&lt;term&gt;...
: One or more IDs or slugs of terms to delete.

[\--by=&lt;field&gt;]
: Explicitly handle the term value as a slug or id.
\---
default: id
options:
  - slug
  - id
\---

### EXAMPLES

    # Delete post category by id
    $ wp term delete category 15
    Deleted category 15.
    Success: Deleted 1 of 1 terms.

    # Delete post category by slug
    $ wp term delete category apple --by=slug
    Deleted category 15.
    Success: Deleted 1 of 1 terms.

    # Delete all post tags
    $ wp term list post_tag --field=term_id | xargs wp term delete post_tag
    Deleted post_tag 159.
    Deleted post_tag 160.
    Deleted post_tag 161.
    Success: Deleted 3 of 3 terms.

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

