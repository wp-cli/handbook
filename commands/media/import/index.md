---
layout: default
title: 'wp media import'
---

`wp media import` - Create attachments from local files or from URLs.

### OPTIONS

&lt;file&gt;...
: Path to file or files to be imported. Supports the glob(3) capabilities of the current shell.
    If file is recognized as a URL (for example, with a scheme of http or ftp), the file will be
    downloaded to a temp file before being sideloaded.

[\--post_id=&lt;post_id&gt;]
: ID of the post to attach the imported files to

[\--title=&lt;title&gt;]
: Attachment title (post title field)

[\--caption=&lt;caption&gt;]
: Caption for attachent (post excerpt field)

[\--alt=&lt;alt_text&gt;]
: Alt text for image (saved as post meta)

[\--desc=&lt;description&gt;]
: "Description" field (post content) of attachment post

[\--featured_image]
: If set, set the imported image as the Featured Image of the post its attached to.

[\--porcelain]
: Output just the new attachment id.

### EXAMPLES

    # Import all jpgs in the current user's "Pictures" directory, not attached to any post
    wp media import ~/Pictures/**\/*.jpg

    # Import a local image and set it to be the post thumbnail for a post
    wp media import ~/Downloads/image.png --post_id=123 --title="A downloaded picture" --featured_image

    # Import an image from the web
    wp media import http://s.wordpress.org/style/images/wp-header-logo.png --title='The WordPress logo' --alt="Semantic personal publishing"

### GLOBAL PARAMETERS

  \--path=&lt;path&gt;
      Path to the WordPress files

  \--url=&lt;url&gt;
      Pretend request came from given URL. In multisite, this argument is how the target site is specified.

  \--user=&lt;id|login|email&gt;
      Set the WordPress user

  \--skip-plugins[=&lt;plugin&gt;]
      Skip loading all or some plugins

  \--skip-themes[=&lt;theme&gt;]
      Skip loading all or some themes

  \--require=&lt;path&gt;
      Load PHP file before running the command (may be used more than once)

  \--[no-]color
      Whether to colorize the output

  \--debug
      Show all PHP errors

  \--prompt
      Prompt the user to enter values for all command arguments

  \--quiet
      Suppress informational messages



