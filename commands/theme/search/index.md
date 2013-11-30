---
layout: default
title: 'wp theme search'
---

`wp theme search` - Search the wordpress.org theme repository.

### OPTIONS

&lt;search&gt;
: The string to search for.

[\--per-page=&lt;per-page&gt;]
: Optional number of results to display. Defaults to 10.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each plugin.

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
: Accepted values: table, csv, json, count. Default: table

### EXAMPLES

    wp theme search automattic --per-page=20

    wp theme search automattic --fields=name,version,slug,rating,num_ratings,description

