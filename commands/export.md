# wp export

Exports WordPress content to a WXR file.

Generates one or more WXR files containing authors, terms, posts, comments, and attachments. WXR files do not include site configuration (options) or the attachment files themselves.

### OPTIONS

[\--dir=&lt;dirname&gt;]
: Full path to directory where WXR export files should be stored. Defaults to current working directory.

[\--stdout]
: Output the whole XML using standard output (incompatible with --dir=)

[\--skip_comments]
: Don't include comments in the WXR export file.

[\--max_file_size=&lt;MB&gt;]
: A single export file should have this many megabytes. -1 for unlimited.
\---
default: 15
\---

[\--filename_format=&lt;format&gt;]
: Use a custom format for export filenames. Defaults to '{site}.wordpress.{date}.{n}.xml'.

[\--include_once=&lt;before_posts&gt;]
: Include specified export section only in the first export file. Valid options are categories, tags, nav_menu_items, custom_taxonomies_terms. Separate multiple sections with a comma. Defaults to none.

[\--allow_orphan_terms]
: Export orphaned terms with `parent=0`, instead of throwing an exception.

### FILTERS

[\--start_date=&lt;date&gt;]
: Export only posts published after this date, in format YYYY-MM-DD.

[\--end_date=&lt;date&gt;]
: Export only posts published before this date, in format YYYY-MM-DD.

[\--post_type=&lt;post-type&gt;]
: Export only posts with this post_type. Separate multiple post types with a comma.
\---
default: any
\---

[\--post_type__not_in=&lt;post-type&gt;]
: Export all post types except those identified. Separate multiple post types with a comma. Defaults to none.

[\--post__in=&lt;pid&gt;]
: Export all posts specified as a comma-separated or space-separated list of IDs. Post's attachments won't be exported unless --with_attachments is specified.

[\--with_attachments]
: Force including attachments in case --post__in has been specified.

[\--start_id=&lt;pid&gt;]
: Export only posts with IDs greater than or equal to this post ID.

[\--max_num_posts=&lt;num&gt;]
: Export no more than &lt;num&gt; posts (excluding attachments).

[\--author=&lt;author&gt;]
: Export only posts by this author. Can be either user login or user ID.

[\--category=&lt;name|id&gt;]
: Export only posts in this category.

[\--post_status=&lt;status&gt;]
: Export only posts with this status.

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

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
