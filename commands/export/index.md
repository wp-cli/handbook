---
layout: default
title: 'wp export'
---

`wp export` - Export content to a WXR file.

<hr />

### OPTIONS

[\--dir=&lt;dirname&gt;]
: Full path to directory where WXR export files should be stored. Defaults
to current working directory.

[\--skip_comments]
: Don't export comments.

[\--max_file_size=&lt;MB&gt;]
: A single export file should have this many megabytes.

### FILTERS

[\--start_date=&lt;date&gt;]
: Export only posts published after this date, in format YYYY-MM-DD.

[\--end_date=&lt;date&gt;]
: Export only posts published before this date, in format YYYY-MM-DD.

[\--post_type=&lt;post-type&gt;]
: Export only posts with this post_type. Separate multiple post types with a
comma. Defaults to all.

[\--post_type__not_in=&lt;post-type&gt;]
: Export all post types except those identified. Seperate multiple post types
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

    wp export --dir=/tmp/ --user=admin --post_type=post --start_date=2011-01-01 --end_date=2011-12-31

    wp export --dir=/tmp/ --post__in=123,124,125

    # Export a random subset of content
    wp export --post__in=$(wp post list --post_type=post --orderby=rand --posts_per_page=8 --format=ids)

### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files.

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user.

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins.

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes.

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once).

  \--[no-]color
      Whether to colorize the output.

  \--debug
      Show all PHP errors; add verbosity to WP-CLI bootstrap.

  \--prompt
      Prompt the user to enter values for all command arguments.

  \--quiet
      Suppress informational messages.



