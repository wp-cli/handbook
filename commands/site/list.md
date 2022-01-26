# wp site list

Lists all sites in a multisite installation.

### OPTIONS

[\--network=&lt;id&gt;]
: The network to which the sites belong.

[\--&lt;field&gt;=&lt;value&gt;]
: Filter by one or more fields (see "Available Fields" section). However,
'url' isn't an available filter, because it's created from domain + path.

[\--site__in=&lt;value&gt;]
: Only list the sites with these blog_id values (comma-separated).

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

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**			  |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host\|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
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
