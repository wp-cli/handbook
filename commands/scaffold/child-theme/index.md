---
layout: default
title: 'wp scaffold child-theme'
---

`wp scaffold child-theme` - Generate empty child theme.

### OPTIONS

&lt;slug&gt;
: The slug for the new child theme.

\--parent_theme=&lt;slug&gt;
: What to put in the 'Template:' header in style.css

[\--theme_name=&lt;title&gt;]
: What to put in the 'Theme Name:' header in style.css

[\--author=&lt;full-name&gt;]
: What to put in the 'Author:' header in style.css

[\--author_uri=&lt;uri&gt;]
: What to put in the 'Author URI:' header in style.css

[\--theme_uri=&lt;uri&gt;]
: What to put in the 'Theme URI:' header in style.css

[\--activate]
: Activate the newly created child theme.

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



