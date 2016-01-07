---
layout: default
title: 'wp media regenerate'
---

`wp media regenerate` - Regenerate thumbnail(s).

<hr />

### OPTIONS

[&lt;attachment-id&gt;...]
: One or more IDs of the attachments to regenerate.

[\--skip-delete]
: Skip deletion of the original thumbnails. If your thumbnails are linked from sources outside your control, it's likely best to leave them around. Defaults to false.

[\--only-missing]
: Only generate thumbnails for images missing image sizes.

[\--yes]
: Answer yes to the confirmation message.

### EXAMPLES

    # re-generate all thumbnails, without confirmation
    wp media regenerate --yes

    # re-generate all thumbnails that have IDs between 1000 and 2000
    seq 1000 2000 | xargs wp media regenerate

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



