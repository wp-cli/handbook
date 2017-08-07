# wp post generate

Generate some posts.

Creates a specified number of new posts with dummy data.

### OPTIONS

[\--count=&lt;number&gt;]
: How many posts to generate?
\---
default: 100
\---

[\--post_type=&lt;type&gt;]
: The type of the generated posts.
\---
default: post
\---

[\--post_status=&lt;status&gt;]
: The status of the generated posts.
\---
default: publish
\---

[\--post_author=&lt;login&gt;]
: The author of the generated posts.
\---
default:
\---

[\--post_date=&lt;yyyy-mm-dd&gt;]
: The date of the generated posts. Default: current date

[\--post_content]
: If set, the command reads the post_content from STDIN.

[\--max_depth=&lt;number&gt;]
: For hierarchical post types, generate child posts down to a certain depth.
\---
default: 1
\---

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: progress
options:
  - progress
  - ids
\---

### EXAMPLES

    # Generate posts.
    $ wp post generate --count=10 --post_type=page --post_date=1999-01-04
    Generating posts  100% [================================================] 0:01 / 0:04

    # Generate posts with fetched content.
    $ curl http://loripsum.net/api/5 | wp post generate --post_content --count=10
      % Total    % Received % Xferd  Average Speed   Time    Time     Time  Current
                                     Dload  Upload   Total   Spent    Left  Speed
    100  2509  100  2509    0     0    616      0  0:00:04  0:00:04 --:--:--   616
    Generating posts  100% [================================================] 0:01 / 0:04

    # Add meta to every generated posts.
    $ wp post generate --format=ids | xargs -d ' ' -I % wp post meta add % foo bar
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
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

