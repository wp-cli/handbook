# wp post list

Gets a list of posts.

Display posts based on all arguments supported by [WP_Query()](https://developer.wordpress.org/reference/classes/wp_query/). Only shows post types marked as post by default.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--&lt;field&gt;=&lt;value&gt;]
: One or more args to pass to WP_Query. The arguments below are the ones that filter on what this command displays; anything else WP_Query accepts still works and is documented with WP_Query itself.

[\--p=&lt;id&gt;|ID]
: Filter by post ID. `--ID` is the name of the column this filters and is accepted as an alias.

[\--title=&lt;title&gt;|post_title]
: Filter by post title, matched in full. `--post_title` is the name of the column this filters and is accepted as an alias.

[\--name=&lt;slug&gt;|post_name]
: Filter by post slug. `--post_name` is the name of the column this filters and is accepted as an alias. Note: this makes the query a single-post one, and WP_Query returns a draft from one of those only to a user who can edit it. WP-CLI runs as no user unless the global `--user` argument says otherwise, so pass that to filter drafts by slug.

[\--author=&lt;author&gt;|post_author]
: Filter by the ID of the post's author. `--post_author` is the name of the column this filters and is accepted as an alias.

[\--author_name=&lt;author_name&gt;]
: Filter by the 'user_nicename' of the post's author.

[\--cat=&lt;cat&gt;]
: Filter by category ID. Accepts a comma-separated list to match any of them, and a negative ID excludes that category instead.

[\--category_name=&lt;category_name&gt;]
: Filter by category slug.

[\--tag=&lt;tag&gt;]
: Filter by tag slug. Accepts a comma-separated list to match any of them, or a '+'-separated list to require all of them.

[\--post_type=&lt;post_type&gt;]
: Filter by post type. Defaults to 'post'. Accepts a comma-separated list, or 'any' for every type registered without 'exclude_from_search'.

[\--post_status=&lt;post_status&gt;]
: Filter by post status. Defaults to 'any', which is every status registered without 'exclude_from_search' - so trashed and auto-draft posts are left out until asked for by name, e.g. `--post_status=trash`.

[\--post_parent=&lt;post_parent&gt;]
: Filter by the ID of the parent post.

[\--post_mime_type=&lt;post_mime_type&gt;]
: Filter by MIME type. Only attachments carry one.

[\--menu_order=&lt;menu_order&gt;]
: Filter by menu order.

[\--comment_status=&lt;comment_status&gt;]
: Filter by comment status. Accepts 'open' or 'closed'.

[\--ping_status=&lt;ping_status&gt;]
: Filter by ping status. Accepts 'open' or 'closed'.

[\--comment_count=&lt;comment_count&gt;]
: Filter by number of comments.

[\--s=&lt;string&gt;]
: Only list the posts matching this search term.

[\--year=&lt;year&gt;]
: Filter by four-digit year, e.g. 2024.

[\--monthnum=&lt;monthnum&gt;]
: Filter by month number, 1 to 12.

[\--day=&lt;day&gt;]
: Filter by day of the month, 1 to 31.

[\--hour=&lt;hour&gt;]
: Filter by hour, 0 to 23.

[\--minute=&lt;minute&gt;]
: Filter by minute, 0 to 59.

[\--second=&lt;second&gt;]
: Filter by second, 0 to 59.

[\--m=&lt;yearmonth&gt;]
: Filter by year and month together, e.g. 202401.

[\--w=&lt;week&gt;]
: Filter by week of the year, 0 to 53.

[\--meta_key=&lt;meta_key&gt;]
: Filter by posts having this meta key. Pair it with `--meta_value` to filter on the value as well.

[\--meta_value=&lt;meta_value&gt;]
: Filter by this meta value. Needs `--meta_key` to say which key it belongs to.

[\--orderby=&lt;orderby&gt;]
: Order the results by this field. Accepts what WP_Query accepts, e.g.
'date', 'title', 'ID', 'menu_order', 'rand', or 'meta_value' alongside `--meta_key`.

[\--order=&lt;order&gt;]
: Direction to order by. Accepts 'ASC' or 'DESC'.

[\--post__in=&lt;ids&gt;]
: Only list the posts with these IDs (comma-separated).

[\--post__not_in=&lt;ids&gt;]
: Exclude the posts with these IDs (comma-separated).

[\--post_name__in=&lt;slugs&gt;]
: Only list the posts with these slugs (comma-separated). Unlike `--name` this is not a single-post query, so it reaches drafts as well.

[\--post_parent__in=&lt;ids&gt;]
: Only list the posts whose parent is one of these IDs (comma-separated).

[\--post_parent__not_in=&lt;ids&gt;]
: Exclude the posts whose parent is one of these IDs (comma-separated).

[\--author__in=&lt;ids&gt;]
: Only list the posts by these author IDs (comma-separated).

[\--author__not_in=&lt;ids&gt;]
: Exclude the posts by these author IDs (comma-separated).

[\--category__in=&lt;ids&gt;]
: Only list the posts in these category IDs (comma-separated).

[\--category__and=&lt;ids&gt;]
: Only list the posts in all of these category IDs (comma-separated).

[\--category__not_in=&lt;ids&gt;]
: Exclude the posts in these category IDs (comma-separated).

[\--tag_id=&lt;tag_id&gt;]
: Filter by tag ID.

[\--tag__in=&lt;ids&gt;]
: Only list the posts with these tag IDs (comma-separated).

[\--tag__and=&lt;ids&gt;]
: Only list the posts with all of these tag IDs (comma-separated).

[\--tag__not_in=&lt;ids&gt;]
: Exclude the posts with these tag IDs (comma-separated).

[\--tag_slug__in=&lt;slugs&gt;]
: Only list the posts with these tag slugs (comma-separated).

[\--tag_slug__and=&lt;slugs&gt;]
: Only list the posts with all of these tag slugs (comma-separated).

[\--page_id=&lt;page_id&gt;]
: Filter by page ID. Needs `--post_type=page` to match anything.

[\--pagename=&lt;pagename&gt;]
: Filter by page slug. Needs `--post_type=page` to match anything.

[\--attachment_id=&lt;attachment_id&gt;]
: Filter by attachment ID. Needs `--post_type=attachment` to match anything.

[\--date_query=&lt;json&gt;]
: Filter by a date query, given as JSON. See WP_Date_Query.

[\--meta_query=&lt;json&gt;]
: Filter by a meta query, given as JSON. See WP_Meta_Query.

[\--tax_query=&lt;json&gt;]
: Filter by a taxonomy query, given as JSON. See WP_Tax_Query.

[\--meta_compare=&lt;meta_compare&gt;]
: Operator to test `--meta_value` with, e.g. '=', '!=', '&gt;' or 'LIKE'.

[\--sentence=&lt;sentence&gt;]
: Match `--s` as one phrase rather than as separate words. Accepts 1 or 0.

[\--exact=&lt;exact&gt;]
: Match `--s` against the whole column rather than part of it. Accepts 1 or 0.

[\--search_columns=&lt;columns&gt;]
: Comma-separated list of columns `--s` looks in. Accepts 'post_title',
'post_excerpt' and 'post_content'. Needs WordPress 6.2 or later.

[\--perm=&lt;perm&gt;]
: Filter by what the current user may do with the post. Accepts
'readable' or 'editable'; pair it with the global `--user` argument, since WP-CLI is no user by default.

[\--posts_per_page=&lt;number&gt;]
: How many posts to return. Defaults to -1, meaning every post.

[\--paged=&lt;paged&gt;]
: Which page of results to return, counted in `--posts_per_page` steps.

[\--offset=&lt;offset&gt;]
: How many posts to skip. Needs `--posts_per_page` set to something other than -1, which otherwise takes precedence.

[\--nopaging=&lt;nopaging&gt;]
: Return every post, ignoring `--posts_per_page`. Accepts 1 or 0.

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

    # List given post by a specific author
    $ wp post list --author=2
    +----+-------------------+-------------------+---------------------+-------------+
    | ID | post_title        | post_name         | post_date           | post_status |
    +----+-------------------+-------------------+---------------------+-------------+
    | 14 | New documentation | new-documentation | 2021-06-18 21:05:11 | publish     |
    +----+-------------------+-------------------+---------------------+-------------+

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
| `--ssh-args=<args>` | Pass additional arguments to SSH (or other tools specified by --ssh scheme). |
| `--http=<http>` | Perform operation against a remote WordPress installation over HTTP. |
| `--user=<id\|login\|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugins>]` | Skip loading all plugins, or a comma-separated list of plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<themes>]` | Skip loading all themes, or a comma-separated list of themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--exec=<php-code>` | Execute PHP code before running the command (may be used more than once). |
| `--context=<context>` | Load WordPress in a given context. |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
| `--alias=<name>` | Name of the alias to use. Aliases can reference local WordPress installations or remote SSH connections. Aliases are defined in the wp-cli.yml file. |
| `--assume-https` | Set $_SERVER['HTTPS'] to make WordPress treat the site as HTTPS. Use when WordPress is behind an HTTPS proxy or load balancer. |
