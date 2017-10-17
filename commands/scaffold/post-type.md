# wp scaffold post-type

Generate PHP code for registering a custom post type.

### OPTIONS

&lt;slug&gt;
: The internal name of the post type.

[\--label=&lt;label&gt;]
: The text used to translate the update messages.

[\--textdomain=&lt;textdomain&gt;]
: The textdomain to use for the labels.

[\--dashicon=&lt;dashicon&gt;]
: The dashicon to use in the menu.

[\--theme]
: Create a file in the active theme directory, instead of sending to STDOUT. Specify a theme with `--theme=&lt;theme&gt;` to have the file placed in that theme.

[\--plugin=&lt;plugin&gt;]
: Create a file in the given plugin's directory, instead of sending to STDOUT.

[\--raw]
: Just generate the `register_post_type()` call and nothing else.

[\--force]
: Overwrite files that already exist.

### EXAMPLES

    # Generate a 'movie' post type for the 'simple-life' theme
    $ wp scaffold post-type movie --label=Movie --theme=simple-life
    Success: Created '/var/www/example.com/public_html/wp-content/themes/simple-life/post-types/movie.php'.

### GLOBAL PARAMETERS

These [global parameters](https://make.wordpress.org/cli/handbook/config/) have the same behavior across all commands and affect how WP-CLI interacts with WordPress.

| **Argument**    | **Description**              |
|:----------------|:-----------------------------|
| `--path=<path>` | Path to the WordPress files. |
| `--url=<url>` | Pretend request came from given URL. In multisite, this argument is how the target site is specified. |
| `--ssh=[<scheme>:][<user>@]<host|container>[:<port>][<path>]` | Perform operation against a remote server over SSH (or a container using scheme of "docker", "docker-compose", "vagrant"). |
| `--http=<http>` | Perform operation against a remote WordPress install over HTTP. |
| `--user=<id|login|email>` | Set the WordPress user. |
| `--skip-plugins[=<plugin>]` | Skip loading all or some plugins. Note: mu-plugins are still loaded. |
| `--skip-themes[=<theme>]` | Skip loading all or some themes. |
| `--skip-packages` | Skip loading all installed packages. |
| `--require=<path>` | Load PHP file before running the command (may be used more than once). |
| `--[no-]color` | Whether to colorize the output. |
| `--debug[=<group>]` | Show all PHP errors; add verbosity to WP-CLI bootstrap. |
| `--prompt[=<assoc>]` | Prompt the user to enter values for all command arguments, or a subset specified as comma-separated values. |
| `--quiet` | Suppress informational messages. |
