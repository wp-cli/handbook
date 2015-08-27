---
layout: default
title: 'wp theme install'
---

`wp theme install` - Install a theme.

<hr />

### OPTIONS

&lt;theme|zip|url&gt;...
: A theme slug, the path to a local zip file, or URL to a remote zip file.

[\--version=&lt;version&gt;]
: If set, get that particular version from wordpress.org, instead of the
stable version.

[\--force]
: If set, the command will overwrite any installed version of the theme, without prompting
for confirmation.

[\--activate]
: If set, the theme will be activated immediately after install.

### EXAMPLES

    # Install the latest version from wordpress.org and activate
    wp theme install twentytwelve --activate

    # Install from a local zip file
    wp theme install ../my-theme.zip

    # Install from a remote zip file
    wp theme install http://s3.amazonaws.com/bucketname/my-theme.zip?AWSAccessKeyId=123&amp;Expires=456&amp;Signature=abcdef

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



