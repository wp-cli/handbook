# wp theme search

Search the WordPress.org theme directory.

Displays themes in the WordPress.org theme directory matching a given
search query.

### OPTIONS

&lt;search&gt;
: The string to search for.

[\--per-page=&lt;per-page&gt;]
: Optional number of results to display. Defaults to 10.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each theme.

[\--fields=&lt;fields&gt;]
: Ask for specific fields from the API. Defaults to name,slug,author,rating. Acceptable values:

    **name**: Theme Name
    **slug**: Theme Slug
    **version**: Current Version Number
    **author**: Theme Author
    **preview_url**: Theme Preview URL
    **screenshot_url**: Theme Screenshot URL
    **rating**: Theme Rating
    **num_ratings**: Number of Theme Ratings
    **homepage**: Theme Author's Homepage
    **description**: Theme Description

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - count
  - yaml
\---

### EXAMPLES

    $ wp theme search photo --per-page=6
    Success: Showing 6 of 203 themes.
    +----------------------+----------------------+--------+
    | name                 | slug                 | rating |
    +----------------------+----------------------+--------+
    | Photos               | photos               | 100    |
    | Infinite Photography | infinite-photography | 100    |
    | PhotoBook            | photobook            | 100    |
    | BG Photo Frame       | bg-photo-frame       | 0      |
    | fPhotography         | fphotography         | 0      |
    | Photo Perfect        | photo-perfect        | 98     |
    +----------------------+----------------------+--------+

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

