---
layout: default
title: 'wp plugin search'
---

`wp plugin search` - Search the wordpress.org plugin repository.

### OPTIONS

&lt;search&gt;
: The string to search for.

[\--per-page=&lt;per-page&gt;]
: Optional number of results to display. Defaults to 10.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each plugin.

[\--fields=&lt;fields&gt;]
: Ask for specific fields from the API. Defaults to name,slug,author_profile,rating. Acceptable values:

    **name**: Plugin Name
    **slug**: Plugin Slug
    **version**: Current Version Number
    **author**: Plugin Author
    **author_profile**: Plugin Author Profile
    **contributors**: Plugin Contributors
    **requires**: Plugin Minimum Requirements
    **tested**: Plugin Tested Up To
    **compatibility**: Plugin Compatible With
    **rating**: Plugin Rating
    **num_ratings**: Number of Plugin Ratings
    **homepage**: Plugin Author's Homepage
    **description**: Plugin's Description
    **short_description**: Plugin's Short Description

[\--format=&lt;format&gt;]
: Accepted values: table, csv, json, count. Default: table

### EXAMPLES

    wp plugin search dsgnwrks --per-page=20 --format=json

    wp plugin search dsgnwrks --fields=name,version,slug,rating,num_ratings

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



