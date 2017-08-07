# wp post list

Get a list of posts.

### OPTIONS

[\--&lt;field&gt;=&lt;value&gt;]
: One or more args to pass to WP_Query.

[\--field=&lt;field&gt;]
: Prints the value of a single field for each post.

[\--fields=&lt;fields&gt;]
: Limit the output to specific object fields.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - ids
  - json
  - count
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each post:

* ID
* post_title
* post_name
* post_date
* post_status

These fields are optionally available:

* post_author
* post_date_gmt
* post_content
* post_excerpt
* comment_status
* ping_status
* post_password
* to_ping
* pinged
* post_modified
* post_modified_gmt
* post_content_filtered
* post_parent
* guid
* menu_order
* post_type
* post_mime_type
* comment_count
* filter
* url

### EXAMPLES

    # List post
    $ wp post list --field=ID
    568
    829
    1329
    1695

    # List posts in JSON
    $ wp post list --post_type=post --posts_per_page=5 --format=json
    [{"ID":1,"post_title":"Hello world!","post_name":"hello-world","post_date":"2015-06-20 09:00:10","post_status":"publish"},{"ID":1178,"post_title":"Markup: HTML Tags and Formatting","post_name":"markup-html-tags-and-formatting","post_date":"2013-01-11 20:22:19","post_status":"draft"}]

    # List all pages
    $ wp post list --post_type=page --fields=post_title,post_status
    +-------------+-------------+
    | post_title  | post_status |
    +-------------+-------------+
    | Sample Page | publish     |
    +-------------+-------------+

    # List ids of all pages and posts
    $ wp post list --post_type=page,post --format=ids
    15 25 34 37 198

    # List given posts
    $ wp post list --post__in=1,3
    +----+--------------+-------------+---------------------+-------------+
    | ID | post_title   | post_name   | post_date           | post_status |
    +----+--------------+-------------+---------------------+-------------+
    | 3  | Lorem Ipsum  | lorem-ipsum | 2016-06-01 14:34:36 | publish     |
    | 1  | Hello world! | hello-world | 2016-06-01 14:31:12 | publish     |
    +----+--------------+-------------+---------------------+-------------+

### GLOBAL PARAMETERS

WP-CLI has a [series of global parameters](https://make.wordpress.org/cli/handbook/config/) that work with all commands. They are called _global parameters_ because they affect how WP-CLI interacts with WordPress and have the same behavior across all commands.

Common global parameters include:

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>`   | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--user=<user>` | Set the WordPress user.      |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |

See [global parameter documentation](https://make.wordpress.org/cli/handbook/config/) for the full list and other configuration options.

