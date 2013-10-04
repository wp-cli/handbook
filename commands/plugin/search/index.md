---
layout: default
title: 'wp plugin search'
---

`wp plugin search` - Search the wordpress.org plugin repository.

### OPTIONS

&lt;search&gt;
: The string to search for.

[--per-page=&lt;per-page&gt;]
: Optional number of results to display. Defaults to 10.

[--format=&lt;format&gt;]
: Output list as table, CSV or JSON. Defaults to table.

[--fields=&lt;fields&gt;]
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

### EXAMPLES

    wp plugin search dsgnwrks --per-page=20 --format=json

    wp plugin search dsgnwrks --fields=name,version,slug,rating,num_ratings

