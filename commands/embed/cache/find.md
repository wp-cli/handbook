# wp embed cache find

Finds an oEmbed cache post ID for a given URL.

Starting with WordPress 4.9, embeds that aren't associated with a specific post will be cached in a new oembed_cache post type. There can be more than one such entry for a url depending on attributes and context.

Not to be confused with oEmbed caches for a given post which are stored in the post's metadata.

### OPTIONS

&lt;url&gt;
: URL to retrieve oEmbed data for.

[\--width=&lt;width&gt;]
: Width of the embed in pixels. Part of cache key so must match. Defaults to `content_width` if set else 500px, so is theme and context dependent.

[\--height=&lt;height&gt;]
: Height of the embed in pixels. Part of cache key so must match. Defaults to 1.5 * default width (`content_width` or 500px), to a maximum of 1000px.

[\--discover]
: Whether to search with the discover attribute set or not. Part of cache key so must match. If not given, will search with attribute: unset, '1', '0', returning first.

### EXAMPLES

    # Find cache post ID for a given URL.
    $ wp embed cache find https://www.youtube.com/watch?v=dQw4w9WgXcQ --width=500
    123

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
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
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors and add verbosity to WP-CLI output. Built-in groups include: bootstrap, commandfactory, and help. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
