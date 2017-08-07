# wp site create

Create a site in a multisite install.

### OPTIONS

\--slug=&lt;slug&gt;
: Path for the new site. Subdomain on subdomain installs, directory on subdirectory installs.

[\--title=&lt;title&gt;]
: Title of the new site. Default: prettified slug.

[\--email=&lt;email&gt;]
: Email for Admin user. User will be created if none exists. Assignement to Super Admin if not included.

[\--network_id=&lt;network-id&gt;]
: Network to associate new site with. Defaults to current network (typically 1).

[\--private]
: If set, the new site will be non-public (not indexed)

[\--porcelain]
: If set, only the site id will be output on success.

### EXAMPLES

    $ wp site create --slug=example
    Success: Site 3 created: http://www.example.com/example/

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

