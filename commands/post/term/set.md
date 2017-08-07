# wp post term set

Set object terms.

Replaces existing terms on the object.

&lt;id&gt;
: The ID of the object.

&lt;taxonomy&gt;
: The name of the taxonomy type to be updated.

&lt;term&gt;...
: The slug of the term or terms to be updated.

[\--by=&lt;field&gt;]
: Explicitly handle the term value as a slug or id.
\---
options:
  - slug
  - id
\---

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

