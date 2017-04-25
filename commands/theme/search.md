# wp theme search

<small>[Commands](/commands/) &raquo; [theme](/commands/theme/) &raquo; search</small>

`wp theme search` - Search the WordPress.org theme directory.

<small>Quick links: <a href="https://github.com/wp-cli/wp-cli/issues?q=is%3Aopen+label%3Acommand%3Atheme-search+sort%3Aupdated-desc">Github issues</a></small>

<hr />

Displays themes in the WordPress.org theme directory matching a given
search query.

### OPTIONS

&lt;search&gt;
: The string to search for.

[\--per-page=&lt;per-page&gt;]
: Optional number of results to display. Defaults to 10.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each theme.

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
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - json
  - count
  - yaml
\---

### EXAMPLES

    $ wp theme search photo --per-page=6
    Success: Showing 6 of 203 themes.
    +----------------------+----------------------+--------+
    | name                 | slug                 | rating |
    +----------------------+----------------------+--------+
    | Photos               | photos               | 100    |
    | Infinite Photography | infinite-photography | 100    |
    | PhotoBook            | photobook            | 100    |
    | BG Photo Frame       | bg-photo-frame       | 0      |
    | fPhotography         | fphotography         | 0      |
    | Photo Perfect        | photo-perfect        | 98     |
    +----------------------+----------------------+--------+



