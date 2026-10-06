# wp site create

Creates a site in a multisite installation.

### OPTIONS

See the [argument syntax](https://make.wordpress.org/cli/handbook/references/argument-syntax/) reference for a detailed explanation of the syntax conventions used.

[\--slug=&lt;slug&gt;]
: Path for the new site. Subdomain on subdomain installs, directory on subdirectory installs. Required if --site-url is not provided.

[\--site-url=&lt;url&gt;]
: Full URL for the new site. Use this to specify a custom domain instead of the auto-generated one. For subdomain installs, this allows you to use a different base domain (e.g., 'http://site.example.com' instead of 'http://site.main.example.com'). For subdirectory installs, this allows you to use a different path. If provided, --slug is optional and will be derived from the URL. If both --slug and --site-url are provided, --slug will be used as the base for internal operations (like user creation), while the domain/path from --site-url will be used for the actual site URL.

[\--title=&lt;title&gt;]
: Title of the new site. Default: prettified slug.

[\--email=&lt;email&gt;]
: Email for admin user. User will be created if none exists. Assignment to super admin if not included.

[\--network_id=&lt;network-id&gt;]
: Network to associate new site with. Defaults to current network (typically 1).

[\--private]
: If set, the new site will be non-public (not indexed)

[\--porcelain]
: If set, only the site id will be output on success.

### EXAMPLES

    # Create a site with auto-generated domain
    $ wp site create --slug=example
    Success: Site 3 created: http://www.example.com/example/

    # Create a site with a custom domain (subdomain multisite)
    $ wp site create --site-url=http://site.example.com
    Success: Site 4 created: http://site.example.com/

    # Create a site with a custom subdirectory (subdirectory multisite)
    $ wp site create --site-url=http://example.com/custom/path/
    Success: Site 5 created: http://example.com/custom/path/

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
