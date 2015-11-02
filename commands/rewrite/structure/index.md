---
layout: default
title: 'wp rewrite structure'
---

`wp rewrite structure` - Update the permalink structure.

<hr />

### DESCRIPTION

Updates the post permalink structure.

To regenerate a .htaccess file with WP-CLI, you'll need to add the mod_rewrite module
to your wp-cli.yml or config.yml. For example:

`apache_modules:
  - mod_rewrite`

### OPTIONS

&lt;permastruct&gt;
: The new permalink structure to apply.

[\--category-base=&lt;base&gt;]
: Set the base for category permalinks, i.e. '/category/'.

[\--tag-base=&lt;base&gt;]
: Set the base for tag permalinks, i.e. '/tag/'.

[\--hard]
: Perform a hard flush - update `.htaccess` rules as well as rewrite rules in database.

### EXAMPLES

    wp rewrite structure '/%year%/%monthnum%/%postname%'

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



