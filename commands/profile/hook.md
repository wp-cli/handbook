# wp profile hook

Profile key metrics for WordPress hooks (actions and filters).

This command runs on the `before_wp_load` hook, just before the WP load process begins.

In order to profile callbacks on a specific hook, the action or filter will need to execute during the course of the request.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[&lt;hook&gt;]
: Drill into key metrics of callbacks on a specific WordPress hook.

[\--all]
: Profile callbacks for all WordPress hooks.

[\--spotlight]
: Filter out logs with zero-ish values from the set.

[\--url=&lt;url&gt;]
: Execute a request against a specified URL. Defaults to the home URL.

[\--fields=&lt;fields&gt;]
: Display one or more fields.

[\--format=&lt;format&gt;]
: Render output in a particular format.
\---
default: table
options:
  - table
  - json
  - yaml
  - csv
\---

[\--order=&lt;order&gt;]
: Ascending or Descending order.
\---
default: ASC
options:
  - ASC
  - DESC
\---

[\--orderby=&lt;fields&gt;]
: Set orderby which field.

### EXAMPLES

    # Profile a hook.
    $ wp profile hook template_redirect --fields=callback,cache_hits,cache_misses
    +--------------------------------+------------+--------------+
    | callback                       | cache_hits | cache_misses |
    +--------------------------------+------------+--------------+
    | _wp_admin_bar_init()           | 0          | 0            |
    | wp_old_slug_redirect()         | 0          | 0            |
    | redirect_canonical()           | 5          | 0            |
    | WP_Sitemaps-&gt;render_sitemaps() | 0          | 0            |
    | rest_output_link_header()      | 3          | 0            |
    | wp_shortlink_header()          | 0          | 0            |
    | wp_redirect_admin_locations()  | 0          | 0            |
    +--------------------------------+------------+--------------+
    | total (7)                      | 8          | 0            |
    +--------------------------------+------------+--------------+

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "docker-compose-run", "vagrant"). |
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
