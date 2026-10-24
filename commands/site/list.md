# wp site list

Lists all sites in a multisite installation.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--network=&lt;id&gt;|site_id|network_id]
: The network to which the sites belong. `--site_id` is the name of the column this filters, `--network_id` is WP_Site_Query's name for it, and both are accepted as aliases. `--network` wins when more than one is given.

[\--&lt;field&gt;=&lt;value&gt;]
: Filter by one or more fields (see "Available Fields" section), or pass any other argument accepted by WP_Site_Query. However, 'url' isn't an available filter, as it comes from 'home' in wp_options. Note: '--path' conflicts with the global parameter of the same name; use
'--site-path' to filter by path instead.

[\--site__in=&lt;value&gt;]
: Only list the sites with these blog_id values (comma-separated).

[\--site__not_in=&lt;value&gt;]
: Exclude the sites with these blog_id values (comma-separated).

[\--site_user=&lt;value&gt;]
: Only list the sites with this user.

[\--site-path=&lt;path&gt;]
: Filter by path. Avoids conflict with the global `--path` parameter.

[\--path__in=&lt;value&gt;]
: Only list the sites with these paths (comma-separated).

[\--path__not_in=&lt;value&gt;]
: Exclude the sites with these paths (comma-separated).

[\--blog_id=&lt;blog_id&gt;|ID]
: Filter by site ID. `--ID` is WP_Site_Query's name for the same filter and is accepted as an alias.

[\--network__in=&lt;value&gt;]
: Only list the sites belonging to these network IDs (comma-separated).

[\--network__not_in=&lt;value&gt;]
: Exclude the sites belonging to these network IDs (comma-separated).

[\--domain=&lt;domain&gt;]
: Filter by domain.

[\--domain__in=&lt;value&gt;]
: Only list the sites with these domains (comma-separated).

[\--domain__not_in=&lt;value&gt;]
: Exclude the sites with these domains (comma-separated).

[\--registered=&lt;date&gt;]
: Filter by the date the site was registered. Accepts a timestamp or a date; a value carrying no time of day matches that whole day.

[\--last_updated=&lt;date&gt;]
: Filter by the date the site was last updated. Accepts a timestamp or a date; a value carrying no time of day matches that whole day.

[\--public=&lt;public&gt;]
: Filter by whether the site is public. Accepts 1 or 0.

[\--archived=&lt;archived&gt;]
: Filter by whether the site is archived. Accepts 1 or 0.

[\--mature=&lt;mature&gt;]
: Filter by whether the site is flagged as mature. Accepts 1 or 0.

[\--spam=&lt;spam&gt;]
: Filter by whether the site is flagged as spam. Accepts 1 or 0.

[\--deleted=&lt;deleted&gt;]
: Filter by whether the site is flagged as deleted. Accepts 1 or 0.

[\--lang_id=&lt;lang_id&gt;]
: Filter by language ID.

[\--lang__in=&lt;value&gt;]
: Only list the sites with these language IDs (comma-separated).

[\--lang__not_in=&lt;value&gt;]
: Exclude the sites with these language IDs (comma-separated).

[\--search=&lt;string&gt;]
: Only list the sites matching this search term. Searches the domain and path columns unless `--search_columns` narrows it.

[\--search_columns=&lt;columns&gt;]
: Comma-separated list of columns `--search` looks in. Accepts 'domain'
and 'path'.

[\--meta_key=&lt;meta_key&gt;]
: Filter by this site meta key. The site meta arguments need WordPress 5.1 or later, which is where multisite gained the table they read.

[\--meta_value=&lt;meta_value&gt;]
: Filter by this site meta value. Used together with `--meta_key`.

[\--meta_compare=&lt;meta_compare&gt;]
: Operator to test the meta value against. Accepts the operators WP_Meta_Query supports, such as '=', '!=', 'LIKE' or 'IN'.

[\--meta_type=&lt;meta_type&gt;]
: Cast the meta value to this type, such as 'NUMERIC' or 'DATE'.

[\--meta_query=&lt;meta_query&gt;]
: A WP_Meta_Query clause list, as JSON, for conditions the meta_* arguments above cannot express.

[\--date_query=&lt;date_query&gt;]
: A WP_Date_Query clause list, as JSON, for ranges `--registered` and `--last_updated` cannot express. Giving those as well narrows this further rather than replacing it.

[\--number=&lt;number&gt;]
: Limit the number of sites returned.

[\--offset=&lt;offset&gt;]
: Number of sites to skip. Used together with `--number`.

[\--no_found_rows=&lt;no_found_rows&gt;]
: Whether to skip counting the total rows the query matches. Accepts 1 or 0.

[\--update_site_cache=&lt;update_site_cache&gt;]
: Whether to prime the object cache with the sites found. Accepts 1 or 0. Turning it off saves work when listing a large network once.

[\--update_site_meta_cache=&lt;update_site_meta_cache&gt;]
: Whether to prime the object cache with the site meta of the sites found. Accepts 1 or 0.

[\--orderby=&lt;field&gt;]
: Order the results by this field, such as 'blog_id', 'domain', 'path',
'registered', 'last_updated' or 'site__in'.

[\--order=&lt;order&gt;]
: Whether to order the results ascending or descending.
\---
options:
  - asc
  - desc
\---

[\--field=&lt;field&gt;]
: Prints the value of a single field for each site.

[\--fields=&lt;fields&gt;]
: Comma-separated list of fields to show.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - csv
  - count
  - ids
  - json
  - yaml
\---

### AVAILABLE FIELDS

These fields will be displayed by default for each site:

* blog_id
* url
* last_updated
* registered

These fields are optionally available:

* site_id
* domain
* path
* public
* archived
* mature
* spam
* deleted
* lang_id

### EXAMPLES

    # Output a simple list of site URLs
    $ wp site list --field=url
    http://www.example.com/
    http://www.example.com/subdir/

    # Output site URLs, most recently registered first
    $ wp site list --orderby=registered --order=desc --field=url
    http://www.example.com/subdir/
    http://www.example.com/

    # Search for sites by domain or path
    $ wp site list --search=subdir --field=url
    http://www.example.com/subdir/

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
