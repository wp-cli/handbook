# wp export

Export WordPress content to a WXR file.

Generates one or more WXR files containing authors, terms, posts,
comments, and attachments. WXR files do not include site configuration
(options) or the attachment files themselves.

### OPTIONS

[\--dir=&lt;dirname&gt;]
: Full path to directory where WXR export files should be stored. Defaults
to current working directory.

[\--skip_comments]
: Don't include comments in the WXR export file.

[\--max_file_size=&lt;MB&gt;]
: A single export file should have this many megabytes.
\---
default: 15
\---

### FILTERS

[\--start_date=&lt;date&gt;]
: Export only posts published after this date, in format YYYY-MM-DD.

[\--end_date=&lt;date&gt;]
: Export only posts published before this date, in format YYYY-MM-DD.

[\--post_type=&lt;post-type&gt;]
: Export only posts with this post_type. Separate multiple post types with a
comma.
\---
default: any
\---

[\--post_type__not_in=&lt;post-type&gt;]
: Export all post types except those identified. Separate multiple post types
with a comma. Defaults to none.

[\--post__in=&lt;pid&gt;]
: Export all posts specified as a comma- or space-separated list of IDs.

[\--start_id=&lt;pid&gt;]
: Export only posts with IDs greater than or equal to this post ID.

[\--author=&lt;author&gt;]
: Export only posts by this author. Can be either user login or user ID.

[\--category=&lt;name&gt;]
: Export only posts in this category.

[\--post_status=&lt;status&gt;]
: Export only posts with this status.

[\--filename_format=&lt;format&gt;]
: Use a custom format for export filenames. Defaults to '{site}.wordpress.{date}.{n}.xml'.

### EXAMPLES

    # Export posts published by the user between given start and end date
    $ wp export --dir=/tmp/ --user=admin --post_type=post --start_date=2011-01-01 --end_date=2011-12-31
    Starting export process...
    Writing to file /tmp/staging.wordpress.2016-05-24.000.xml
    Success: All done with export.

    # Export posts by IDs
    $ wp export --dir=/tmp/ --post__in=123,124,125
    Starting export process...
    Writing to file /tmp/staging.wordpress.2016-05-24.000.xml
    Success: All done with export.

    # Export a random subset of content
    $ wp export --post__in="$(wp post list --post_type=post --orderby=rand --posts_per_page=8 --format=ids)"
    Starting export process...
    Writing to file /var/www/example.com/public_html/staging.wordpress.2016-05-24.000.xml
    Success: All done with export.

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

